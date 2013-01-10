    public void createType(ArrayList<String> arrays)
    {
        boolean checkVariableInput = true;
        while (checkVariableInput)
        {
            InputDialog dlg = new InputDialog(Display.getCurrent().getActiveShell(),
                "Create Data Type", "Enter The New Data Type Name", null, null);
            dlg.open();
            String dataTypeName = dlg.getValue();
            // checking null case
            if (dataTypeName == null)
            {
                MessageDialog.openInformation(Display.getCurrent().getActiveShell(),
                    "Please Enter a valid variable name", dataTypeName);
                continue;
            }
            
            //checks to make sure all characters are valid
            boolean isImproperFormat = false;
            for(int i = 0; i < dataTypeName.length() ; i++) {
                char currChar = dataTypeName.charAt(i);
                if(!Character.isLetterOrDigit(currChar) && currChar != '_')
                    isImproperFormat = true;
            }
            
            // Check for first character being a letter and the length is less than 31
            if (!Character.isLetter(dataTypeName.charAt(0)) || dataTypeName.length() > 31 || isImproperFormat)
            {
                MessageDialog.openInformation(Display.getCurrent().getActiveShell(),
                    "Please Enter a valid variable name", dataTypeName);
                continue;
            }
            
            // check AST if variable name is in there
            /*
             * using a gettoken for the AST, loop over each token comparing it to our variable name,
             * if it is not in there, continue to check fortan variable name restrictions
             * 
             * if(token.getText().compare(dataTypeName)) { MessageDialog.openInformation(
             * Display.getCurrent().getActiveShell(),
             * "Please Enter a valid variable name, name already exists in code", dataTypeName);
             * continue; }
             */
            
            /*
             * Insert --   " USE       newDataType           ! use a module" to top of file inorder to use our module
             * 
             *  MODULE  newDataType
                   IMPLICIT  NONE
                   **
                   * put the array declarations pulled out from the fortran code here
                   **
                
                   PUBLIC :: array1, array2, array3   ! make the arrays public...
                END MODULE  newDataType
             */
        }
    }