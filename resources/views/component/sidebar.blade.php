<div class="fa-sidebar">
    <div class="sidebar-lable"><span>type</span></div>
    @foreach($type as $ty)
        @component("component.sidebarpart",['ty'=>$ty])
        @endcomponent
    @endforeach
</div>

<style type="text/css">
    .fa-sidebar{
        border-style: solid;
        border-width: 1px 1px 0px 1px;
        border-color: #e1e4e8;
        border-radius: 5px;
        padding: 20px 10px;
    }

    .sidebar-lable{
        font-size: 18px;
        font-weight: 500;
    }


    @media screen and (max-width: 980px){

        .sidebar-lable{
            display: flex;
            justify-content: center;
            font-size: 25px;
            font-weight: 600;
        }

    }
</style>

<script>

</script>