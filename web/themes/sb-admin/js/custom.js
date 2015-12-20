google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(drawMultSeries);
function drawMultSeries() {
    var data = new google.visualization.DataTable();
    data.addColumn({type: 'string', role: 'annotation'});
    var data = google.visualization.arrayToDataTable([
        ['', '', {role: 'style'}],
        ['SO100', 82, '#146734'], // RGB value
        ['SO101', 98, '#146734'], // English color name
        ['SO102', 86, '#146734'], // CSS-style declaration 
    ]);
    var options = {
        width: 400,
        legend: 'none',
        annotation: {
            // index here is the index of the DataTable column providing the annotation
            1: {
                style: 'line'
            }
        },
        hAxis: {
            viewWindow: {
                min: [0, 80, 50],
                max: [100, 80, 90]
            }

        },
        vAxis: {
            viewWindowMode: 'explicit',
            baseline: 1, baselineColor: '#000',
            viewWindow: {
                min: 0,
                max: 100,
                //min: [7, 50, 0],
                //max: [100, 50, 0]
            },
            gridlines: {
                count: 10,
                color: 'transparent'
            }
        }

    };
    var chart = new google.visualization.ColumnChart(
            document.getElementById('studentProgress'));
    chart.draw(data, options);
}
google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(ecourseClass);
function ecourseClass() {
    var data = new google.visualization.DataTable();
    data.addColumn({type: 'string', role: 'annotation'});
    var data = google.visualization.arrayToDataTable([
        ['', '', {role: 'style'}],
        ['1', 100, '#146734'], // RGB value
        ['2', 91, '#146734'], // English color name
        ['3', 81, '#146734'], // CSS-style declaration
        ['4', 95, '#146734'], // CSS-style declaration
        ['5', 77, '#146734'], // CSS-style declaration 
        ['6', 96, '#146734'], // CSS-style declaration 
        ['7', 96, '#146734'], // CSS-style declaration  
    ]);
    var options = {
        width: 910,
        legend: 'none',
        annotation: {
            // index here is the index of the DataTable column providing the annotation
            1: {
                style: 'line'
            }
        },
        hAxis: {
            viewWindow: {
                min: [0, 80, 50],
                max: [100, 80, 90]
            }

        },
        vAxis: {
            viewWindowMode: 'explicit',
            baseline: 1, baselineColor: '#000',
            viewWindow: {
                min: 0,
                max: 100,
                //min: [7, 50, 0],
                //max: [100, 50, 0]
            },
            gridlines: {
                count: 10,
                color: 'transparent'
            }
        }

    };
    var chart = new google.visualization.ColumnChart(
            document.getElementById('ecourseClass'));
    chart.draw(data, options);
}
google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(ecourseLalExam);
function ecourseLalExam() {
    var data = new google.visualization.DataTable();
    data.addColumn({type: 'string', role: 'annotation'});
    var data = google.visualization.arrayToDataTable([
        ['', '', {role: 'style'}],
        ['PRE', 80, '#146734'], // RGB value
        ['K-EXAM', 97, '#146734'], // English color name
        ['P-EXAM', 94, '#146734'], // CSS-style declaration 
    ]);
    var options = {
        width: 500,
        legend: 'none',
        bar: {
            groupWidth: 60
        },
        annotation: {
            // index here is the index of the DataTable column providing the annotation
            1: {
                style: 'line'
            }
        },
        hAxis: {
            viewWindow: {
                min: [0, 80, 50],
                max: [100, 80, 90]
            }

        },
        vAxis: {
            viewWindowMode: 'explicit',
            baseline: 1, baselineColor: '#000',
            viewWindow: {
                min: 0,
                max: 100,
                //min: [7, 50, 0],
                //max: [100, 50, 0]
            },
            gridlines: {
                count: 10,
                color: 'transparent'
            }
        }

    };
    var chart = new google.visualization.ColumnChart(
            document.getElementById('ecourseLalExam'));
    chart.draw(data, options);
}

google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(ecourseForum);
function ecourseForum() {
    var data = new google.visualization.DataTable();
    data.addColumn({type: 'string', role: 'annotation'});
    var data = google.visualization.arrayToDataTable([
        ['', '', {role: 'style'}],
        ['1', 100, '#146734'], // RGB value
        ['2', 91, '#146734'], // English color name
        ['3', 81, '#146734'], // CSS-style declaration
        ['4', 95, '#146734'], // CSS-style declaration
        ['5', 77, '#146734'], // CSS-style declaration 
        ['6', 96, '#146734'], // CSS-style declaration 
        ['7', 96, '#146734'], // CSS-style declaration  
    ]);
    var options = {
        width: 910,
        legend: 'none',
        annotation: {
            // index here is the index of the DataTable column providing the annotation
            1: {
                style: 'line'
            }
        },
        hAxis: {
            viewWindow: {
                min: [0, 80, 50],
                max: [100, 80, 90]
            }

        },
        vAxis: {
            viewWindowMode: 'explicit',
            baseline: 1, baselineColor: '#000',
            viewWindow: {
                min: 0,
                max: 100,
                //min: [7, 50, 0],
                //max: [100, 50, 0]
            },
            gridlines: {
                count: 10,
                color: 'transparent'
            }
        }

    };
    var chart = new google.visualization.ColumnChart(
            document.getElementById('ecourseForum'));
    chart.draw(data, options);
}

google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(ecourseProject);
function ecourseProject() {
    var data = new google.visualization.DataTable();
    data.addColumn({type: 'string', role: 'annotation'});
    var data = google.visualization.arrayToDataTable([
        ['', '', {role: 'style'}],
        ['1', 80, '#146734'], // RGB value
        ['2', 97, '#146734'], // English color name
        ['3', 94, '#146734'], // CSS-style declaration 
    ]);
    var options = {
        width: 500,
        legend: 'none',
        bar: {
            groupWidth: 60
        },
        annotation: {
            // index here is the index of the DataTable column providing the annotation
            1: {
                style: 'line'
            }
        },
        hAxis: {
            viewWindow: {
                min: [0, 80, 50],
                max: [100, 80, 90]
            }

        },
        vAxis: {
            viewWindowMode: 'explicit',
            baseline: 1, baselineColor: '#000',
            viewWindow: {
                min: 0,
                max: 100,
                //min: [7, 50, 0],
                //max: [100, 50, 0]
            },
            gridlines: {
                count: 10,
                color: 'transparent'
            }
        }

    };
    var chart = new google.visualization.ColumnChart(
            document.getElementById('ecourseProject'));
    chart.draw(data, options);
}
google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(program_progress);
function program_progress() {
    var data = new google.visualization.DataTable();
    data.addColumn({type: 'string', role: 'annotation'});
    var data = google.visualization.arrayToDataTable([
        ['', '', {role: 'style'}],
        ['CR100', 82, '#146734'], // RGB value
        ['CR101', 98, '#146734'], // English color name // CSS-style declaration 
    ]);
    var options = {
        width: 400,
        legend: 'none',
        bar: {
            groupWidth: 60
        },
        annotation: {
            // index here is the index of the DataTable column providing the annotation
            1: {
                style: 'line'
            }
        },
        hAxis: {
            viewWindow: {
                min: [0, 80, 50],
                max: [100, 80, 90]
            }

        },
        vAxis: {
            viewWindowMode: 'explicit',
            baseline: 1, baselineColor: '#000',
            viewWindow: {
                min: 0,
                max: 100,
                //min: [7, 50, 0],
                //max: [100, 50, 0]
            },
            gridlines: {
                count: 10,
                color: 'transparent'
            }
        }

    };
    var chart = new google.visualization.ColumnChart(
            document.getElementById('program_progress'));
    chart.draw(data, options);
}
google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(dmt_progress);
function dmt_progress() {
    var data = new google.visualization.DataTable();
    data.addColumn({type: 'string', role: 'annotation'});
    var data = google.visualization.arrayToDataTable([
        ['', '', {role: 'style'}],
        ['DMT100', 82, '#146734'], // RGB value
        ['DMT101', 98, '#146734'], // English color name
        ['DMT102', 86, '#146734'], // CSS-style declaration
        ['DMT104', 78, '#EEC41A'], // CSS-style declaration
        ['DMT105', 78, '#990000'], // CSS-style declaration
        ['DMT106', 5, 'stroke-color: #126432; stroke-width: 1; fill-color: #fff'], // CSS-style declaration
        ['DMT107', 5, 'stroke-color: #126432; stroke-width: 1; fill-color: #fff'], // CSS-style declaration
        ['DMT108', 5, 'stroke-color: #126432; stroke-width: 1; fill-color: #fff'],
        ['DMT109', 5, 'stroke-color: #126432; stroke-width: 1; fill-color: #fff'], // CSS-style declaration
    ]);
    var options = {
        width: 910,
        legend: 'none',
        annotation: {
            // index here is the index of the DataTable column providing the annotation
            1: {
                style: 'line'
            }
        },
        hAxis: {
            viewWindow: {
                min: [0, 80, 50],
                max: [100, 80, 90]
            }

        },
        vAxis: {
            viewWindowMode: 'explicit',
            baseline: 1, baselineColor: '#000',
            viewWindow: {
                min: 0,
                max: 100,
                //min: [7, 50, 0],
                //max: [100, 50, 0]
            },
            gridlines: {
                count: 10,
                color: 'transparent'
            }
        }

    };
    var chart = new google.visualization.ColumnChart(
            document.getElementById('dmt_progress'));
    chart.draw(data, options);
}
google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(faculty_progress);
function faculty_progress() {
    var data = new google.visualization.DataTable();
    data.addColumn({type: 'string', role: 'annotation'});
    var data = google.visualization.arrayToDataTable([
        ['', '', {role: 'style'}],
        ['SO100', 82, '#146734'], // RGB value
        ['FO101', 98, '#146734'], // English color name 
    ]);
    var options = {
        width: 300,
        legend: 'none',
        annotation: {
            // index here is the index of the DataTable column providing the annotation
            1: {
                style: 'line'
            }
        },
        hAxis: {
            viewWindow: {
                min: [0, 80, 50],
                max: [100, 80, 90]
            }

        },
        vAxis: {
            viewWindowMode: 'explicit',
            baseline: 1, baselineColor: '#000',
            viewWindow: {
                min: 0,
                max: 100,
                //min: [7, 50, 0],
                //max: [100, 50, 0]
            },
            gridlines: {
                count: 10,
                color: 'transparent'
            }
        }

    };
    var chart = new google.visualization.ColumnChart(
            document.getElementById('faculty_progress'));
    chart.draw(data, options);
}
google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(idt_progress);
function idt_progress() {
    
    var data = new google.visualization.DataTable();
    data.addColumn({type: 'string', role: 'annotation'});
    var data = google.visualization.arrayToDataTable([
        ['', '', {role: 'style', color: '#fff'}],
        ['IDT100', 82, '#146734'], // RGB value
        ['IDT101', 98, '#146734'], // English color name
        ['IDT102', 86, '#146734'], // CSS-style declaration
        ['IDT104', 78, '#EEC41A'], // CSS-style declaration
        ['IDT105', 78, '#990000'], // CSS-style declaration
        ['IDT106', 5, 'stroke-color: #126432; stroke-width: 1; fill-color: #fff'], // CSS-style declaration
        ['IDT107', 5, 'stroke-color: #126432; stroke-width: 1; fill-color: #fff'], // CSS-style declaration
        ['IDT108', 5, 'stroke-color: #126432; stroke-width: 1; fill-color: #fff'],
        ['IDT109', 5, 'stroke-color: #126432; stroke-width: 1; fill-color: #fff'], // CSS-style declaration
    ]);
    var options = {
        legend: 'none',
        width: 910,
        annotation: {
            // index here is the index of the DataTable column providing the annotation
            1: {
                style: 'line'
            }
        },
        hAxis: {
            viewWindow: {
                min: [0, 80, 50],
                max: [100, 80, 90]
            }

        },
        vAxis: {
            viewWindowMode: 'explicit',
            baseline: 1, baselineColor: '#000',
            viewWindow: {
                min: 0,
                max: 100,
                //min: [7, 50, 0],
                //max: [100, 50, 0]
            },
            gridlines: {
                count: 10,
                color: 'transparent'
            }
        }

    };
    var chart = new google.visualization.ColumnChart(
            document.getElementById('idt_progress'));
    chart.draw(data, options);
}
google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(leadership_progress);
function leadership_progress() {
    var data = new google.visualization.DataTable();
    data.addColumn({type: 'string', role: 'annotation'});
    var data = google.visualization.arrayToDataTable([
        ['', '', {role: 'style'}],
        ['PCS100', 82, '#146734'], // RGB value
        ['PCS101', 98, '#146734'], // English color name
        ['PCS102', 86, '#146734'], // CSS-style declaration
        ['PCS104', 78, '#EEC41A'], // CSS-style declaration
        ['PCS105', 78, '#990000'], // CSS-style declaration
        ['PCS106', 5, 'stroke-color: #126432; stroke-width: 1; fill-color: #fff'], // CSS-style declaration
        ['PCS107', 5, 'stroke-color: #126432; stroke-width: 1; fill-color: #fff'], // CSS-style declaration
        ['PCS108', 5, 'stroke-color: #126432; stroke-width: 1; fill-color: #fff'],
        ['PCS109', 5, 'stroke-color: #126432; stroke-width: 1; fill-color: #fff'], // CSS-style declaration
    ]);
    var options = {
        width: 910,
        legend: 'none',        
        annotation: {
            // index here is the index of the DataTable column providing the annotation
            1: {
                style: 'line'
            }
        },
        hAxis: {
            viewWindow: {
                min: [0, 80, 50],
                max: [100, 80, 90]
            }

        },
        vAxis: {
            viewWindowMode: 'explicit',
            baseline: 1, baselineColor: '#000',
            viewWindow: {
                min: 0,
                max: 100,
                //min: [7, 50, 0],
                //max: [100, 50, 0]
            },
            gridlines: {
                count: 10,
                color: 'transparent'
            }
        }

    };
    var chart = new google.visualization.ColumnChart(
            document.getElementById('leadership_progress'));
    chart.draw(data, options);
}