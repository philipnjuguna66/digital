<div>

    <!-- SEO OPTIMIZATION
    ================================================== -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <form wire:submit.prevent="analyse">
                        <div class="form-group d-flex">
                            <div>

                                <input class="rounded mr-2 ml-2" placeholder="enter url to Analyse" wire:model.lazy="url">

                            </div>
                            <div>

                                <button class="btn btn-success btn-sm">Analyse</button>
                            </div>
                        </div>
                    </form>

                    <x-loading target="analyse"/>

                    @if($result)

                        <table class="table">
                            <tr>
                                <td>Made with WordPress: {{ $result['wordpress'] ?  "Yes"  : "No" }}</td>
                            </tr>
                            <tr>
                                <td>Google Analytics Installed: {{ $result['googleAnalytics']  ? " Yes" : "No" }}</td>
                            </tr>
                            <tr>
                                <td>facebookPixel Installed: {{ $result['facebookPixel']   ? " Yes" : "No" }}</td>
                            </tr>

                            <tr>
                                <td>Page word Count: {{ $result['wordCount'] }}</td>
                            </tr>
                            <tr>
                                <td> Title: {!! $result['title']['text'] !!} </td>
                            </tr>
                            <tr>
                                <td>H1: {!! $result['h1']['text'] !!}</td>
                            </tr>


                        </table>
                    @endif
                </div>
            </div>
        </div>
    </section>

</div>
