<div class="modal fade" id="edit{{$item->id}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">

                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{route('menu.update',$item->id)}}" method="post">
                    {{ method_field('patch') }}
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <label for="Name" class="mr-sm-2"> Add Name:</label>

                            <input id="Name" type="text" name="name" class="form-control" value="{{$item->type}}">


                        </div>

                    </div>
                    <br><br>
                    <div class="row">

                        <div class="col">
                            <label for="details" class="mr-sm-2"> Add details:</label>

                            <textarea id="details" type="text" name="details" class="form-control">{{$item->details}}</textarea>

                        </div>

                    </div>

                    <br><br>
                    <div class="row">

                        <div class="col">
                            <label for="price" class="mr-sm-2"> Add price:</label>

                            <input id="price" type="text" name="price" value="{{$item->price}}" class="form-control">

                        </div>

                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">close</button>
                <button type="submit" class="btn btn-success">save</button>
            </div>
                </form>

            </div>
        </div>
    </div>
</div>
