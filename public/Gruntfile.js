module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		transport: {
			dialog: {
				files: [
					{
						src: '*',
						dest: 'public/'
					}
				]
			}
		},
		concat: {
			dialog: {
				files: [
					{
						"public/css/flatsns.css": ['public/css/reset.css', 'public/css/flatter.css']
					}
				]
			}
		}
	});

	grunt.loadNpmTasks('grunt-cmd-transport');
    grunt.loadNpmTasks('grunt-cmd-concat');

    grunt.registerTask('build', ['transport', 'concat']);
};