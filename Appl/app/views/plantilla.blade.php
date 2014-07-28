
<!DOCTYPE html>
<html>
  <head>
    <title>Sistema infancia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!--Tags -->
    <link rel="stylesheet" type="text/css" href="http://xoxco.com/projects/code/tagsinput/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/start/jquery-ui.css" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <link href="css/style2.css" rel="stylesheet">
    <!--Font Awesone -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--Notificaciones-->
    <!--<link rel="stylesheet" href="css/jquery.gritter.css">-->
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


  </head>
  <body>
    <div class="container">

	@yield('interfaz')


    <div class="content">

    @yield('menu')

    
    
<!-- Main bar -->
    <div class="mainbar"> 
    
    @yield('centro')
      
    </div>

   <!-- Mainbar ends -->
   <div class="clearfix"></div>

</div>
    
    
    </div><!--Fin container -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/validar.js"></script>
    <script src="js/core.js"></script>
    <!--Notificaciones-->
    <script src="js/jquery.gritter.min.js"></script>
    <!--  <script src="js/notificacion.js"></script>-->
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <!--Tabs -->
    <script type="text/javascript" src="http://xoxco.com/projects/code/tagsinput/jquery.tagsinput.js"></script>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js'></script>    
  

    <script type="text/javascript">
    
    function onAddTag(tag) {
      alert("Added a tag: " + tag);
    }
    function onRemoveTag(tag) {
      alert("Removed a tag: " + tag);
    }
    
    function onChangeTag(input,tag) {
      alert("Changed a tag: " + tag);
    }


    
    $(function() {

      $('#tags_3').tagsInput({
        width: 'auto',
        defaultText:'Sintomas',

        //autocomplete_url:'test/fake_plaintext_endpoint.html' //jquery.autocomplete (not jquery ui)
        //autocomplete_url:'test/fake_json_endpoint.html' // jquery ui autocomplete requires a json endpoint
      });

      $('#tags').importTags('foo,bar,baz');

            

// Uncomment this line to see the callback functions in action
   //   $('input.tags').tagsInput({onAddTag:onAddTag,onRemoveTag:onRemoveTag,onChange: onChangeTag});   

// Uncomment this line to see an input with no interface for adding new tags.
    //$('input.tags').tagsInput({interactive:false});
    });

     
  </script>

  </body>
</html>rr