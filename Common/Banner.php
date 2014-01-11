<style>
    #slides{
        display: none;
    }
</style>
<div id="slides">
    <img src="/images/banner/1.jpg">
    <img src="/images/banner/2.jpg">
    <img src="/images/banner/3.jpg">
    <img src="/images/banner/4.jpg">
</div>
<script src="/js/jquery-1.10.2.min.js"></script>
<script src="/slidejs/source/jquery.slides.js"></script>
<script>
    $(function(){
       $("#slides").slidesjs({
           width: 940,
           height: 528
       });
    });
</script>