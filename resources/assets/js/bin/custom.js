document.addEventListener("DOMContentLoaded", function() {
  //DROPDOWN trigger
  var elems = document.querySelectorAll(".dropdown-trigger");
  var options = {
    hover: true
  };
  var instances = M.Dropdown.init(elems, options);
  var instance = M.Dropdown.getInstance(elems);

  //Modal edit triger
  var create = document.querySelectorAll("#create");
  var instances = M.Create.init(create);
  var instance1 = M.Create.getInstance(create);

  //Modal edit triger
  var edit = document.querySelectorAll("#edit");
  var instances = M.Edit.init(edit);
  var ed = M.Edit.getInstance(edit);

  //Modal edit triger
  var del = document.querySelectorAll("#delete");
  var instances = M.Del.init(del);
  var instance3 = M.Del.getInstance(del);
});
