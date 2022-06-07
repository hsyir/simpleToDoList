@extends("layout.app")

@section("content")

<div class="container mt-1 border rounded bg-dark text-info  d-flex flex-column  pt-2 cont">
    <div class="row  d-flex flex-column jusitify-content-center align-items-center m-2">
        <div class="col-md-6">
            <form method="POST" id="form" action="/storeNewItem">
                <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon1" name="action" value='insert'>اضافه کردن</button>
                    <input type="text" class="form-control" name="task" placeholder="عنوان وظیفه / تسک" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>
            </form>
        </div>
    </div>
    <div class="row d-flex flex-column ">
        <div class="col-md-15 ">
            <ul class="list-group p-2 ">
                @if(mysqli_num_rows($result)>0)
                @while($row = mysqli_fetch_assoc($result))
                @php
                $secondary = $row['done'] ? "'flexSwitchCheckChecked' checked " : "flexSwitchCheckDefault";
                @endphp
                <div class='form-check form-switch  rounded  border-bottom border-warning pt-1 pb-1 mb-1 rower'>
                    <form method='post' action="/storeNewItem">
                        <input type='hidden' name='action' value='done' />
                        <input type='hidden' name='id' class='hid1' value="{{ $row['id'] }}" />
                        <label class='form-check-label label' for='flexSwitchCheckChecked'>{{ $row['title'] }} </label>
                        <input class=' form-check-input switches align-self-right ' name='done' value='done' type='checkbox' {{ $secondary}}><br>
                    </form>
                    <button class='positioner' data-bs-toggle='modal' data-bs-target='#exampleModal'><i class="bi bi-trash text-dark"></i></button>
                </div>
                @endwhile
            </ul>
            <div class="d-flex justify-content-center "><span class="text-warning mb-2  "><a href="/convertToexcel" class="text-warning"><i class="bi bi-file-earmark-spreadsheet excel" ></i></a></span></div>

            
        </div>
    </div>

</div>



@else
<li class='list-group-item list-group-item-warning'>هیچ تسکی اضافه نشده است</li>
@endif

@endsection