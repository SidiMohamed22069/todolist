<script>
    function loopAndReturn() {
  for (let i = 0; i < 10; i++) {
    if(i==4){
        continue;
    }
    alert(i)
  }
}

loopAndReturn();

</script>