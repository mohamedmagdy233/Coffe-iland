<div class="modal fade" id="delete{{$item->id}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                    id="exampleModalLabel">
                    {{trans('main_trans.delete_item')}}
                </h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('menu.destroy',$item->id)}}" method="post">
                    @csrf
                    @method('Delete')
                    <input id="id" type="hidden" name="id" class="form-control" value="{{$item->id}}">
                    <span>delete</span>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">close</button>

                        <button type="submit" class="btn btn-danger">delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
