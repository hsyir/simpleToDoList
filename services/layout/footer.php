
</div>

<hr>

</div>

 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">حذف رکورد</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        آیا از حذف رکورد مطمعنید ؟
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btn_cancel" data-bs-dismiss="modal">انصراف</button>
      <form method="post"> 
      <input   type='hidden' name='id'  id="hid" />
      <button  name='action' value='delete' class="btn btn-primary" data-bs-target='#exampleModal' id="btn_confirm">مطمعنم !</button>
      </form>
      </div>
    </div>
  </div>
</div>
</main>
 











<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/js.js"></script>

<script type="text/javascript">
  let del = document.getElementsByClassName('positioner');
    let form = document.getElementById("form");
    let myModal = document.getElementById('myModal');
    let myInput = document.getElementById('myInput');
    let btncancel = document.getElementById("btn_cancel");
    let btnconfirm = document.getElementById("btn_confirm");
    let switchs = document.getElementsByClassName("switches");
    let hidden = document.getElementById("hid");
    let hidden1 = document.getElementsByClassName("hid1");

    for(let i =0;i<switchs.length;i++){
      switchs[i].addEventListener("change",function(e){
        
        e.target.form.submit();
        // console.log(e.target.form.submit());
      });
    }
let a =0;
    for(let j=0;j<=hidden1.length-1;j++){
              console.log(j);
              }

    for(let i =0;i<del.length;i++){
           del[i].addEventListener('click',(e)=>{
           
           document.getElementById("hid").value =hidden1[i].value;
          // e.preventDefault();
          console.log(hidden1[i].value);
          
        });
    }


    </script>
</body>
</html>