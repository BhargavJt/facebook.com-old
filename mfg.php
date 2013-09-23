 function logged() {
    alert('logged');
}
function notlogged() {
    alert('not logged');
}
</script>

<script src="http://www.facebook.com/ajax/composer/attachment/question/question.php" onload="logged()" onerror="notlogged()">
