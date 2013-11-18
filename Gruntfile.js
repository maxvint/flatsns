module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJson('package.json');

		transport: {
			dialog: {
				files: [
					{
						src: '*',
						dest: '.'
					}
				]
			}
		}
	});
};