<?php 

    /* 
     * Title: TelegrUman
     * Author: Matteo Enna
     * License: GPL V3 
     */

    
    /* Include library */
    include_once 'telegrUman/telegrUman.php';
    
    /*
     * Config.xml is a simple xml file. 
     * Inside this file you can set the structure of the user object.
     * Fields are three: name, default and temporary
     * Name:        name of attribute
     * Default:     assign a default value of attribute
     * Temporary:   If set, the current temporary value. When calling the clearTemporary function only deletes temporary files.
    */
    
    
    /* Test calls */
    //$uman = new telegrUman(88);

    /* Test for the set of the attributes */
    //$uman->setValue('atr1', 'ciao');
    //$uman->save();

    /* Test for the get of the attributes */
    //$uman->setValue('atr1', 'ciao');
    //$uman->save();
    
    /* Test for the restoration of one of the attribute with the default values */
    //$uman->resetValue('atr1');
    //$uman->save();
    
    /* Test for the elimination of one attribute */
    //$uman->deleteValue('atr1');
    //$uman->save();
    
    /* Test for the restoration of all of the attributes with the default values */
    //$uman->resetAll();
    //$uman->save();
    
    /* Test for the elimination of all of the attributes */
    //$uman->deleteAll();
    //$uman->save();
    