

<div class="btnContainer">
    <button class="btn submitBtn" role="button" type="submit">
        <span class="text">Submit</span>
    </button>
    <form action="" method="POST" id="formNav">
    <button class="btn back" role="button" formaction="backNav.php">
    
        <span class="text">Back</span>
    </button>
    </form>
        <script>
            function jsWrapper() {
                event.preventDefault;
                document.getElementById('formNav').submit();
            }
        </script>
        

    
   <!-- onclick="window.location.href='
   < ...php echo $nextPage; ?>
   '" -->