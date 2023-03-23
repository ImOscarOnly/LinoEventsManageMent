$(document).ready(function () {
    $("body").on("click", "#edit", async (e) =>
      update($(e.currentTarget).data("id"))
    );
    $("body").on("click", "#delete", (e) =>
      deletes($(e.currentTarget).data("id"))
    );
    $("body").on("click", "#view", (e) => view($(e.currentTarget).data("id")));
  
    $("#filesearch").keyup(function () {
      var value = $("#filesearch").val().toLowerCase();
      $("#main-table tr").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
    });
  
    let sampleArray = [];
    getAllData();
    function getAllData() {
      sampleArray = [];
      $.get({
        url: "paps/papsCrud.php",
        data: { getData: "getData" },
        success: function (data) {
          let newData = JSON.parse(data);
          let table = $("#main-table");
          newData.forEach((event, i) => {
            sampleArray.push(event);
            let tableRow = $("<tr>", { id: newData.id });
            $("<td>", { class: "text-wrap", html: i + 1 }).appendTo(tableRow);
            $("<td>", { class: "text-wrap", html: event.event_name }).appendTo(
              tableRow
            );
            $("<td>", { class: "text-wrap", html: event.exp_participants }).appendTo(
              tableRow
            );
            $("<td>", { class: "text-wrap", html: event.event_sched }).appendTo(
              tableRow
            );
            $("<td>", { class: "text-wrap", html: event.event_venue }).appendTo(
              tableRow
            );
            $("<td>", { class: "text-wrap", html: event.num_participants }).appendTo(
              tableRow
            );
            $("<td>", { class: "text-wrap", html: event.act_participants }).appendTo(
              tableRow
            );
            $("<td>", { class: "text-wrap", html: event.event_type }).appendTo(
              tableRow
            );
            $("<td>", { class: "text-wrap", html: event.event_obj }).appendTo(
              tableRow
            );
            $("<td>", { class: "text-wrap", html: event.exe_summary }).appendTo(
              tableRow
            );
            $("<td>", { class: "text-wrap", html: event.documentation }).appendTo(
              tableRow
            );
            $("<td>", { class: "text-wrap", html: event.prob_encounter }).appendTo(
              tableRow
            );
            $("<td>", { class: "text-wrap", html: event.recommendation }).appendTo(
              tableRow
            );

            
            
  
            // buttons action
            let tableData = $("<td>", { class: "text-wrap" });
            $("<button>", {
              class: "btn btn-success",
              "data-id": i,
              id: "view",
              html: "View",
            }).appendTo(tableData);
            $("<button>", {
              class: "btn btn-primary",
              "data-id": i,
              id: "edit",
              html: "Edit",
            }).appendTo(tableData);
            $("<button>", {
              class: "btn btn-danger",
              "data-id": event.id,
              id: "delete",
              html: "Delete",
            }).appendTo(tableData);
            tableData.appendTo(tableRow);
            table.append(tableRow);
          });
        },
      });
    }
  
    $("#create-new").click(function () {
      $("#exampleModalLabel").html("Add Sample");
      $("#exampleModal").modal("show");
      $("#method").attr("name", "addNew");
    });
  
    $("#btn-mul").click(function () {
      let formData = $("#formData").serializeArray();
      $.post({
        url: "paps/papsCrud.php",
        data: formData,
        success: function (data) {
          if (data) {
            $("#formData").trigger("reset");
            $("#exampleModal").modal("hide");
            $("#main-table").empty();
            // sampleArray.empty();
            getAllData();
          }
        },
      });
    });
  
    function update(index) {
      $("#exampleModal").modal("show");
      $("#exampleModalLabel").html("Update Sample");
      $("#method").attr("name", "update");
      let models = sampleArray[index];
      Object.keys(models).map((key) => {
        $([name='${key}']).val(models[key]).attr("disabled", true);
      });
  
      $("#btn-mul").attr("id", "updateData");
      $("#updateData").attr("name", "update");
    }
  
    $("#updateData").click(function () {
      let formData = $("#formData").serializeArray();
      $.post({
        url: "paps/papsCrud.php",
        data: formData,
        success: function (data) {
          if (data) {
            $("#formData").trigger("reset");
            $("#exampleModal").modal("hide");
            $("#main-table").empty();
            // sampleArray.length = 0;
            getAllData();
          }
        },
      });
    });
  
    function deletes(id) {
      $.post({
        url: "paps/papsCrud.php",
        data: { id: id, delete: "delete" },
        success: function (data) {
          if (data) {
            $("#formData").trigger("reset");
            $("#exampleModal").modal("hide");
            $("#main-table").empty();
            // sampleArray.length = 0;
            getAllData();
          }
        },
      });
    }
  
    function view(index) {
      $("#exampleModal").modal("show");
      $("#exampleModalLabel").html("View Sample");
      let models = sampleArray[index];
      Object.keys(models).map((key) => {
        $([name='${key}']).val(models[key]).attr("disabled", true);
      });
      $("#btn-mul").hide();
    }
  });