<div class="content-Block">
    <div class="content-blank content-top"></div>
    <div class="content-title">
        <div jump="{{$pa->symble}}" class="the-title"><span>{{$pa->articletitle}}</span></div>
        <div class="the-update-time"><span>{{$pa->updated_at}}</span></div>
    </div>
    <div class="content-blank content-bottom"></div>
</div>

<style type="text/css">
    .content-Block{

    }

    .content-blank{
        height: 30px;
    }

    .content-top{
        border-style: solid;
        border-width: 1px 0px 0px 0px;
        border-color: #e1e4e8;
    }

    .content-title{
        height: 60px;
    }

    .content-bottom{

    }

    .the-update-time{
        color: #626269;
        font-size: 5px;
    }

    .the-title{
        color: #dc2a00;
        font-size: 18px;
        font-weight: 600;
        display: flex;
        margin-bottom: 10px;
        cursor: pointer;
    }

    @media screen and (max-width: 980px){
        .content-Block{
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }

        .the-update-time{
            font-size: 20px;
        }

        .the-title{
            font-size: 25px;
        }

        .content-blank{
            height: 30px;
        }

        .content-title{
            display: flex;
            justify-content: space-between;
        }
    }
</style>

<script>
    $(".content-Block").each(function () {
        $(this).mouseover(function () {
            $(this).css("background-color","#f5f8fa");
            $(this).siblings().css("background-color","white");
        })

        $(this).mouseout(function () {
            $(this).css("background-color","white");
        })
    })

    $(".the-title").each(function(){
        $(this).click(function(){
            var jump = $(this).attr("jump");
            window.location.href = "article-details/"+jump;
        })
    })
</script>