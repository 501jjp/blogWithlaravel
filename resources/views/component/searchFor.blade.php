<div class="searchFor">
    <div contenteditable="true" ></div>
</div>
<div class="searchUi">
    <span class="glyphicon glyphicon-search"></span>
</div>



<style type="text/css">
    .searchFor {
        border-radius: 3px;
        background-color: black;
        float: left;
        width: 90%;
        height: 25px;
    }
    .searchFor > div{

        border: 0px;
        outline: none;
        color: #ebeced;
        font-size: 17px;
        height: 100%;
        margin: auto;
        border-radius: 3px;
        width: 100%;
    }
    .searchUi{
        float: left;
        border-radius: 3px;
        background-color: black;
        width: 2%;
        margin-left: 1px;
    }
</style>

<script>
    $(".searchFor").mouseover(function () {
        $(this).css("background-color","#383838");
    })

    $(".searchFor").mouseout(function () {
        if($(".searchFor > div").text()==""){
            $(".searchFor").css("background-color","black");
            $(".searchFor > div").blur();
        }else{

        }
    })

    $(".searchFor > div").blur(function () {
        if($(".searchFor > div").text()==""){
            $(".searchFor").css("background-color","black");
            $(".searchFor > div").blur();
        }else{

        }
    })
</script>
