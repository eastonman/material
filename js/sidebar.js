var SideBarDropdown = new mdui.Collapse('#sidebar-header-collapse');

document.getElementById('sidebar-header-collapse-controller').addEventListener('click' , function() {
	SideBarDropdown.toggle('#sidebar-header-collapse-item');
});