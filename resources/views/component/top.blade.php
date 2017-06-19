<div class="fa-top">
    <div class="guid">
        <div class="top-guid">
            <div class="small-parts top-cheoosed"><span>首页</span></div>
            <div class="small-parts"><span>简介</span></div>
            <div id="git" class="small-parts"><span>代码</span></div>
        </div>
    </div>

    <div class="top-dividing-line"></div>
</div>

<style>
    .fa-top{
        height: 65px;
    }

    .guid{
        display: flex;
        justify-content: center;
        height: 72%;
    }

    .top-guid{

        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .top-dividing-line{
        border-style: solid;
        border-width: 1px 0px 0px 0px;
        border-color: black;
        height: 28%;
        width: 100%;
    }

    .small-parts{
        cursor: pointer;
        font-size: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 33.3333%;
    }

    .top-cheoosed{
        background-color: #f5f8fa;
        height: 100%;
        border-style:solid;
        border-width: 0px 0px 2px 0px;
        border-color: #8a6d3b;
    }

    @media screen and (max-width: 980px){

        .fa-top{
            height: auto;
        }

        .top-guid{
            width: 100%;
        }

        .small-parts{
            height: 60px;
            font-size: 30px;
            font-weight: 600;
        }
        .top-dividing-line{
            height: 20px;
        }
    }
</style>

<script>
    $(".small-parts").each(function () {
        $(this).click(function(){
            $(this).attr("class","small-parts top-cheoosed");
            $(this).siblings().attr("class","small-parts");
        })
    });

    $("#git").click(function () {
        window.location.href = "https://github.com/501jjp";
    })
</script>