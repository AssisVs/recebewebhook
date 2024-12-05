<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->

    @method('post');
    {{ 'chegou  aqui na view' }}


    <form  action="{{route('hooksstore')}}" method="POST" >
        @csrf

        <div class="input-group my-4">

        <button type="submit" class="btn btn-outline-success" id=fileBtn><i class="fa-solid fa-upload"></i> Receber</button>
        </div>

        </form>


</div>
