module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
			dist: {
				src: [
					'js/lib/*.js', // All JS in the libs folder
					'js/global.js'  // This specific file
				],
				dest: 'js/build/production.js',
			}
		},
		uglify: {
			build: {
				src: 'js/build/production.js',
				dest: 'js/build/production.min.js'
			}
		},
		
		// running `grunt less` will compile once
		less: {
			development: {
				options: {
					paths: ["./css"],
						yuicompress: true
					},
				files: {
					"./css/style.css": "./css/style.less"
				}
			}
		},
		
		cssmin: {
		  combine: {
			files: {
			  'css/output.css': ['css/polyfill.min.css', 'css/shadowbox.css','css/anythingslider.css',
			  'css/jquery.mCustomScrollbar.css', 
			  'css/style.css']
			}
		  }
		},
		// running `grunt watch` will watch for changes
		watch: {
			files: ["./css/*.less", "./js/*.js"],
			tasks: ["less", "concat", "uglify", "cssmin"]
		}
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat', 'uglify', 'less','cssmin', 'watch']);

};