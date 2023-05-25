<h1>Listagem dos suportes</h1>
<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($supports as $support )
            <td>{{$support->subject}}</td>
            <td>{{$support->status}}</td>
            <td>{{$support->body}}</td>
        @endforeach 
    </tbody>
</table>