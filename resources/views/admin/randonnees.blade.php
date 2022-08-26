@extends('layouts.app')

@section('title')
    INTERFACE ADMINISTRATEUR
@endsection

@section('content')
<script>
    function showElement(id) {
        let element = document.getElementById(id)
        if (element.style.display == 'block') {
            element.style.display = 'none'
        } else {
            element.style.display = 'block'
        }
    }
</script>


   
    <!------------------------------------------------------------------------------------------------>
@endsection
