
<script>
    let currentPageUrl = window.location.href;
    let lastPage;
    if (currentPageUrl.includes('index')) {
        lastPage = 'index.php';
    }
    else if (currentPageUrl.includes('form1')) {
        lastPage = 'index.php';
    }
    else if (currentPageUrl.includes('form2')) {
        lastPage = 'question-form1.php';
    }
    else if (currentPageUrl.includes('form3')) {
        lastPage = 'question-form2.php';
    }
    else if (currentPageUrl.includes('report')) {
        lastPage = 'question-form3.php';
    }
</script>

<div class="btnContainer">
    <button class="btn submitBtn" role="button" type="submit>
        <span class="text">Submit</span>
    </button>
    <form action="" method="POST" id="formNav">
        <!-- Its navigatin.. Button says back and thats exactly what he does -->
    <button class="btn back" role="button" onclick="window.location.replace(lastPage)" formaction="backNav.php" form="formNav">
    
        <span class="text">Back</span>
    </button>
    </form>
        
        

    
   <!-- onclick="window.location.href='
   < ...php echo $nextPage; ?>
   '" -->