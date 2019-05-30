<?php
session_start();
        //require ( 'D:\\xamp_\\htdocs\\testing001\\PdfToText-master\\PdfToText.phpclass' ) ;// D:\xamp_\htdocs\testing001\PdfToText-master\PdfToText.phpclass
       include ( 'C:/xampp/my_xampp/htdocs/testing001/vendor/pmdunggh/pdftotext/PdfToText.phpclass' ) ;

       /*
       -the idea is to use an oline webapp which does the ocr perfectly to model mine after
       
       -the composer is used to install the package need for the program(composer.json, composer install into terminal)

        -php script to implement the functions from the package(set path /package.php class)

        
       
       
       
       
       
       
       
       
       

        echo '<br /><br /><a href="logout.php">Logout</a>';  
      echo '<br /><br />';
      echo '<br /><br />';

       */
     
     
     
   /*  
    {  
         header("location:pdo_login.php");  
    }  
*/
        function  output ( $message )
        {
         if  ( php_sapi_name ( )  ==  'cli' )
             echo ( $message ) ;
         else
             echo ( nl2br ( $message ) ) ;
         }
            //a session basically just hold the post data in a temp buffer
            //this temp data could be used by any page with access to that session
         if (isset($_SESSION['message']) && $_SESSION['message']) {
             printf('<b>%s</b>', $_SESSION['message']);
             echo "<br> here is the file <br>";
             // printf('<b>%s</b>', $_SESSION['file_']);
             $_upfile= $_SESSION['file_'];
             echo  $_upfile  ;
             unset($_SESSION['message']);
         }

          //  $pdf_file	= $_FILES['image'];
            //was file copied == false
            try {
                if (! $_upfile) {
                    echo "<br>the pdf file wasn't copied<br>";
                    echo  $message  ;
                } else {
                    echo "<br>one file copied<br>";

                    //  $pdf = new PdfToText ( $pdf_file.pdf, PdfToText::PDFOPT_CAPTURE ) ; use VanXuan\PdfToText\PdfToText;
                   // $_file = 'C:/xampp/my_xampp/htdocs/testing001/uploaded_files/Ashesi Ticket';

                         $uploadFileDir =  'C:/xampp/my_xampp/htdocs/testing001/uploaded_files/';

                        $dest_path = $uploadFileDir . $_upfile;
                  
                    $pdf	=  new PdfToText("$dest_path") ; 
                       //  echo  $message  ;
                    if (!$pdf) {
                        echo "<br>the pdf file wasn't on the second condition!<br>";
                        echo  $message  ;

                    } 

                    else
                     {
                        echo "<br>calling the output func<br>";

                        output("Original file contents :\n") ;
                        echo "<br>first output<br>";

                        output(file_get_contents("$dest_path.txt")) ;
                        echo "<br>2nd output<br>";

                        output("-----------------------------------------------------------\n") ;
                        echo "<br>third output<br>";

                
                        output("Extracted file contents :\n") ;
                        echo "<br>fourth output<br>";

                        output($pdf -> Text) ;
                        echo "<br>last output<br>";
                    }
                }
            }
            catch(Exception $error)  
            {  
                 $message = $error->getMessage();   // . $exception->getMessage();
            } 
                
                if(isset($_POST['upload'])){
                    header("Location:index.php");

                }
?>

                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>Document</title>
                </head>
                <body>
                <form method="POST" action="a_toText.php" >

 

    <button type="submit" name="upload" >upload another</button>
            </form>
</body>
</html>
  
 






 <?php
/*
    $pdf = new  PdfToText( '$file_name.pdf');
    $pdf->Options = PdfToText::PDFOPT_DECODE_IMAGE_DATA;
    $pdf->Load( $argv [1] );
    echo $pdf->Text ;

   
	include ( '../../PdfToText.phpclass' ) ;

	function  output ( $message )
	   {
		if  ( php_sapi_name ( )  ==  'cli' )
			echo ( $message ) ;
		else
			echo ( nl2br ( $message ) ) ;
	    }

	$file	=  'sample' ;
	$pdf	=  new PdfToText ( "$file.pdf" ) ;

	output ( "Original file contents :\n" ) ;
	output ( file_get_contents ( "$file.txt" ) ) ;
	output ( "-----------------------------------------------------------\n" ) ;

	output ( "Extracted file contents :\n" ) ;
    output ( $pdf -> Text ) ;
    

    //this is the 
           
    
        //if(isset($_FILES['image'])
           

            if ( php_sapi_name ( ) != 'cli' ) 
            echo ( "<pre>" ) ; 
    
    
        $pdf_file =
        $xml_file = $file_name; 
      

        $pdf -> SetCaptures ( $xml_file ) ; 
        $captures = $pdf -> GetCaptures ( ) ; 
    
        echo ( "Document header title : " . ( ( string ) $captures -> Title [0] ) . "\n" ) ; 
    
        $index = 0 ; 
        foreach ( $captures -> ReportLines as $line ) 
           { 
            $columns = array ( ) ; 
    
            foreach ( $line as $column ) 
                $columns [] = ( string ) $column ; 
    
            $index ++ ; 
            echo ( "Page #" . $line -> Page . ", Line #$index : " . trim ( implode ( ' *** ', $columns ) ) . "\n" ) ; 
            } 
    
        echo "Capture contents :\n" ; 
        print_r ( $captures ) ; 
        }<img src="" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">

    */
   ?>
