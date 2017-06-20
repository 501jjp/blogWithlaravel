<div class="header-child">
    <div class="head-words">
        <span >501jjp</span>
    </div>
    <div class="search">
        @component("component.searchFor")
        @endcomponent
    </div>
</div>

<style type="text/css">
    .header-child{
        background-color: black;
        height: 40px;
        display: flex;
        flex-wrap: wrap;
        align-items:center;
        justify-content:space-around;
    }

    .search{
        width: 20%;
        display: flex;
        flex-wrap: wrap;
        align-items:center;
    }

    .head-words{
        color:#ebeced;
        font-size: 20px;
    }

    @media screen and (max-width: 980px){
        .header-child{
            height: 300px;
            flex-direction: column;
        }

        .head-words{
            font-size: 60px;
        }

        .head-words{
            flex-grow: 1;
            display: flex;
            align-items: center;
        }

        .search{
            flex-grow: 1;
        }
    }
</style>

