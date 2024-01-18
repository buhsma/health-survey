

<div class="btnContainer">
    <button class="btn submitBtn" role="button" type="submit>
        <span class="text">Submit</span>
    </button>
    <form action="" method="POST" id="formNav">
        <!-- Its navigatin.. Button says back and thats exactly what he does -->
    <button class="btn back" role="button" onclick="window.location.replace(previousPageUrl)" formaction="backNav.php" form="formNav">
    
        <span class="text">Back</span>
    </button>
    </form>
        <script>
           
                let previousPageUrl = document.referrer;

                
      
        </script>
        

    
   <!-- onclick="window.location.href='
   < ...php echo $nextPage; ?>
   '" -->