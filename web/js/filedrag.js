(function() {

	// getElementById
	function $id(id) {
		return document.getElementById(id);
	}

	// output information
	function Output(msg) {
	
		var msg2 = "<p class='loadedFile'><input type='text' value='" + msg +"' /><span style='margin-left: 20px;' class='close-icon'>x</span></p>";
	
		var m = $id("messages");
		m.innerHTML = msg2 + m.innerHTML;
	}

	// file drag hover
	function FileDragHover(e) {
		e.stopPropagation();
		e.preventDefault();
		//e.target.className = (e.type == "dragover" ? "hover" : "");
	}

	// file selection
	function FileSelectHandler(e) {

		// cancel event and hover styling
		FileDragHover(e);

		// fetch FileList object
		var files = e.target.files || e.dataTransfer.files;

		// process all File objects
		for (var i = 0, f; f = files[i]; i++) {
			ParseFile(f);
		}

	}

	// output file information
	function ParseFile(file) {
		// using this one for adding single file
		$(".uploadFile").val(file.name);
		$(".close").show();
		
		// use this line for adding multi files
		// Output(file.name);

	};

	// initialize
	function Init() {

		var fileselect = $id("fileselect"),
			filedrag = $id("filedrag"),
			submitbutton = $id("submitbutton");

		// file select
		fileselect.addEventListener("change", FileSelectHandler, false);

		// is XHR2 available?
		var xhr = new XMLHttpRequest();
		if (xhr.upload) {

			// file drop
			filedrag.addEventListener("dragover", FileDragHover, false);
			filedrag.addEventListener("dragleave", FileDragHover, false);
			filedrag.addEventListener("drop", FileSelectHandler, false);
			filedrag.style.display = "block";

			// remove submit button
			submitbutton.style.display = "none";
		}

	}

	// call initialization file
	if (window.File && window.FileList && window.FileReader) {
		Init();
	}

})();