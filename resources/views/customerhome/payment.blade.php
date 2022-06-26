@extends('customerhome.app')
@section('content')
    <div class="container"><br>

        <br>
        <h3>Paiement</h3>



        <table class="table table-bordered " width="100%" bgcolor="white" style="font-size:12px">
            <thead>
                <th>Service </th>
                <th>Montant </th>
                <th>Prestataire </th>

                <th>Date </th>

                <th>Statut mission</th>
            </thead>
            <tbody>
                @foreach ($mypayments as $payment)
                    <td>{{ $payment->titre }}</td>
                    <td>{{ $payment->amount }}</td>
                    <td>{{ $payment->name }}</td>

                    <td>{{ $payment->created_at }}</td>
                    <td>
                        @switch( $payment->statut )
                            @case(1)
                                echec
                            @break

                            @case(0)
                                reussi
                            @break

                            @default
                        @endswitch
                    </td>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
