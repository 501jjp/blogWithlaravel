<div>
    @php
        $i = 0;
    @endphp
    @foreach($tips as $tip)

        @php
        $backgroundColoer = $i%2;
        @endphp

        @component('component.cells',['tip'=>$tip,"backgroundColoer"=>$backgroundColoer])
        @endcomponent

        @php
        $i++
        @endphp
    @endforeach
</div>

<style>
    .cells{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }

    .cells0{
        background-color: #e1e4e8;
    }
    .cells1{
        background-color: #f5f8fa;
    }

    .delate_article{
        color: #1f648b;
    }
</style>

<script>
    $(".delate_article").each(function () {
        $(this).click(function () {
            var symble = $(this).attr("symble");
            var route = $(this).attr("route");
            window.location.href = route;
        })
    })
</script>