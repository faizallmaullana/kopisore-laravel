@php
    // Read the JSON file
    $json = file_get_contents($json_file);

    // Decode the JSON file
    $json_data = json_decode($json, true);
@endphp

<div class="div">
    @if (isset($json_data[0]['ice']))
        <div>
            <h2>{{ $title }}</h2>
            <table>
                <tr>
                    <th></th>
                    <th>HOT</th>
                    <th>ICE</th>
                </tr>
                @foreach ($json_data as $key => $item)
                    <tr>
                        <td class="padding-right emp">{{ $item['menu'] }}</td>
                        <td>{{ $item['hot'] }}</td>
                        <td>{{ $item['ice'] }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    @elseif (isset($json_data[0]['caption']))
        <h2>{{ $title }}</h2>
        @foreach ($json_data as $key => $item)
            <div class="caption">
                <div class="menu-sp">
                    <h3>{{ $item['menu'] }}</h3>
                    <p>{{ $item['caption'] }}</p>
                </div>
                <p>{{ $item['price'] }}</p>
            </div>
        @endforeach
    @else
        <div>
            <h2>{{ $title }}</h2>
            <table>
                @foreach ($json_data as $key => $item)
                    <tr>
                        <td class="padding-right emp">{{ $item['menu'] }}</td>
                        <td>{{ $item['price'] }}</td>
                    </tr>
                @endforeach
            </table>
        </div>

    @endif
</div>


<style>
    .menu .caption {
        width: 320px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    /* .menu .caption .menu-sp {
        display: flex
    } */

    .menu .padding-right {
        padding-right: 3em;
    }

    .menu h2 {
        text-align: left;
        margin-bottom: 0.5em;
    }

    .menu .emp {
        font-weight: 600;
    }
</style>
