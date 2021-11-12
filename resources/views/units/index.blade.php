@extends('base')


@section('content')


<div class="container index" >
    <h1 style=color:white;>Units</h1>
        <table class="table table-bordered table-striped table-sm" style=color:white;>
            <thead>
                <tr>
                        <th>Unit ID</th>
                        <th>Unit Type</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($units as $u): ?>
                        <tr>
                            <td><?= $u->id ?> </td>
                            <td><?= $u->unit_type ?> </td>
                            <td><?= $u->description ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
