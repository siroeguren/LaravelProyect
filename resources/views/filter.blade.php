<form action="/api/filter" method="post">
    <select name="stock">
        <option value="Unselected" default>Seleccione un filtro</option>
        <option value=">5"> Mayor que 5</option>
        <option value="<5"> Menor que 5 </option>
    </select>
    <input type="submit" value="Enviar">
</form>


@if(!empty($arrayProducts))
<p>entra</p>

    @foreach ($arrayProducts as $product)
    <table>
            <a href="{{ url('/products/'.$product['id']) }}"></a>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td>{{ $product['stock'] }}</td>
    </table>
    @endforeach

@endif
