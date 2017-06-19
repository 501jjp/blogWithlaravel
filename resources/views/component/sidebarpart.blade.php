<div class="fa-sidebarpart">
    <span style="color: #dc2a00">{{$ty->type}}</span>
    <span>{{$ty->counts}}</span>
</div>

<style type="text/css">
    .fa-sidebarpart{
        display: flex;
        justify-content: space-between;
        padding: 10px;
        border-radius: 1px;
    }

    @media screen and (max-width: 980px){
        .fa-sidebarpart{
            font-size: 30px;
        }
    }
</style>

<script>
    $(".fa-sidebarpart").each(function () {
        $(this).mouseover(function () {
            $(this).css("background-color","#f5f8fa");
            $(this).siblings().css("background-color","white");
        })

        $(this).mouseout(function () {
            $(this).css("background-color","white");
        })
    })
</script>