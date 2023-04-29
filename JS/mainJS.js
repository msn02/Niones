const activePage = window.location.pathname;
const navLink = document.querySelectorAll('nav a').forEach(link => {
	if (link.href.inludes('${activePage}')) {
		link.classlist.add('active');
		// to be edited later
	}
})