<div class="footer">
    <div class="order-left"></div>
    <div class="order-center">
        <div class="dividingLine"></div>
        <div class="footer-content">
            <span>湘ICP备16020385号</span>
            <div class="theendlink">
                <div><a href="https://github.com/501jjp/">github</a></div>|
                <div><a href="https://shawn-ji.github.io/">纪寿安的博客</a></div>
            </div>
        </div>

        <div ></div>
    </div>
    <div class="order-right"></div>
</div>

<style type="text/css">
    .footer{
        display: flex;
        height: 110px;
        width: 100%;
    }

    .order-left{
        order:1;
        width: 25%;
    }

    .order-center{
        order: 2;
        width: 50%;

    }

    .order-right{
        order: 3;
        width: 25%;
    }

    .dividingLine{
        border-style: solid;
        border-width: 0px 0px 1px 0px;
        border-color: black;
        height: 28%;
        width: 100%;
    }

    .footer-content{
        width: 100%;
        height: 72%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .theendlink{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
    }

    .theendlink div{
        padding: 5px;
    }
</style>