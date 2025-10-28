<form class="m-4" method="POST" action="{{ route('contents.update', $content->id) }}">
    @csrf
    @method('DELETE')
</form>
