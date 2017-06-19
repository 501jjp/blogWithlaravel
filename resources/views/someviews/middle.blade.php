<div>
    @component("component.middleCenter")
        @slot("center")
                <div class="home-page-midle-center">
                    <div class="left-content-summary">
                        @foreach($pas as $pa)
                            @component("component.contentSummary",["pa"=>$pa])
                            @endcomponent
                        @endforeach
                    </div>
                    <div class="page-choose">
                        {{ $pas->links() }}
                    </div>
                </div>
        @endslot

        @slot("sidebar")
                <div class="right-sidebar">
                    @component("component.sidebar",["type"=>$type])
                    @endcomponent
                </div>
            @endslot
    @endcomponent
</div>
<style type="text/css">
    .home-page-midle-center{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .left-content-summary{
        width: 100%;
    }

    .right-sidebar{
        width: 100%;
    }

    .page-choose{
        display: flex;
        justify-content: center;
    }
</style>

