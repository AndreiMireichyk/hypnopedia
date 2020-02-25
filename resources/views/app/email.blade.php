<table>
    @if(isset($data['name']))
        <tr>
            <td>Имя -{{$data['name']}}</td>
        </tr>
    @endif
    @if(isset($data['contact']))
        <tr>
            <td>Контакты - {{$data['contact']}}</td>
        </tr>
    @endif
    @if(isset($data['message']))
        <tr>
            <td>Сообщение - {{$data['message']}}</td>
        </tr>
    @endif
</table>
