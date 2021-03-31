
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>AdminKit Demo</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-right">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>


		<script src="dataTable/jquery.js"></script>
		<script src="dataTable/jquery.dataTables.min.js"></script>
		<script src="dataTable/dataTables.bootstrap4.min.js"></script>


		<script>
		$(document).ready(function() {
			$('#example').DataTable();
		});

		$(document).ready(function() {
			$("#domainsTable").tablesorter({
				sortList: [
					[3, 1],
					[2, 0]
				]
			});
		});

		function searchTable() {
			var input;
			var saring;
			var status;
			var tbody;
			var tr;
			var td;
			var i;
			var j;
			input = document.getElementById("input");
			saring = input.value.toUpperCase();
			tbody = document.getElementsByTagName("tbody")[0];;
			tr = tbody.getElementsByTagName("tr");
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td");
				for (j = 0; j < td.length; j++) {
					if (td[j].innerHTML.toUpperCase().indexOf(saring) > -1) {
						status = true;
					}
				}
				if (status) {
					tr[i].style.display = "";
					status = false;
				} else {
					tr[i].style.display = "none";
				}
			}
		}
		</script>




</body>

</html>
