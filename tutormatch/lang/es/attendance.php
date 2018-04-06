<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'attendance', language 'en'
 *
 * @package   mod_attendance
 * @copyright  2011 Artem Andreev <andreev.artem@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['Aacronym'] = 'D';
$string['Afull'] = 'Dominado';
$string['Eacronym'] = 'P';
$string['Efull'] = 'Pendiente';
$string['Lacronym'] = 'L'; // NU
$string['Lfull'] = 'Atrasado'; // NU
$string['Pacronym'] = 'P-'; // NU
$string['Pfull'] = 'Presente'; // NU
$string['acronym'] = 'Acrónimo';
$string['absenteereport'] = 'Reporte de dominio';
$string['add'] = 'Agregar';
$string['addmultiplesessions'] = 'Sesiones Múltiples';
$string['addwarning'] = 'Agregar advertencia';
$string['addsession'] = 'Agregar sesión';
$string['adduser'] = 'Agregar usuario';
$string['all'] = 'Todos';
$string['allcourses'] = 'Todos los cursos';
$string['allpast'] = 'Todos los anteriores';
$string['allsessions'] = 'Todas las sesiones';
$string['attendance:addinstance'] = 'Agregar una nueva actividad de TutorMatch';
$string['attendance:canbelisted'] = 'Presente en la nómina';
$string['attendance:changeattendances'] = 'Alterando Dominios';
$string['attendance:changepreferences'] = 'Alterando Preferencias';
$string['attendance:export'] = 'Exportar Reportes';
$string['attendance:manageattendances'] = 'Gestionar Dominios';
$string['attendance:managetemporaryusers'] = 'Gestionar usuarios temporales';
$string['attendance:takeattendances'] = 'Reportando Dominios';
$string['attendance:view'] = 'Viendo Dominios';
$string['attendance:viewreports'] = 'Viendo Reportes';
$string['attendance:viewsummaryreports'] = 'Ver resumen de reportes del curso';
$string['attendance:warningemails'] = 'Can be subscribed to emails with absentee users'; // NU
$string['attendance_already_submitted'] = 'You may not self register attendance that has already been set.'; // NU
$string['attendancedata'] = 'Datos de Dominio';
$string['attendanceforthecourse'] = 'Dominio del curso';
$string['attendancegrade'] = 'Nota de dominio';
$string['attendancenotset'] = 'Debe reportar su dominio';
$string['attendancenotstarted'] = 'Aún no se ha habilitado el reporte de dominio para este curso';
$string['attendancepercent'] = 'Porcentaje de dominio';
$string['attendancereport'] = 'Reporte de dominio';
$string['attendancesuccess'] = 'Se ha reportado el dominio de forma exitosa';
$string['attendanceupdated'] = 'Dominio actualizado exitosamente';
$string['attforblockdirstillexists'] = 'el directorio antiguo mod/attforblock aún existe - debe eliminar este directorio en su servidor antes de ejecutar esta actualización.';
$string['attrecords'] = 'Registros de dominio';
$string['automark'] = 'Marcado automático';
$string['automarkall'] = 'Si';
$string['automarkclose'] = 'Desmarcar al fin de la sesión';
$string['automark_help'] = 'Permite que el marcado sea completado de forma automática.
La opción "Si" significa que los estudiantes serán automáticamente marcados según su primer acceso al curso.
La opción "Desmarcar al fin de la sesión" significa que cualquier estudiante que no haya marcado su dominio será se le asignará el estado de "no domina".';
$string['automarktask'] = 'Comprobar sesiones que requieren auto marcado';
$string['autorecorded'] = 'sistema auto guardado';
$string['averageattendance'] = 'Dominio promedio';
$string['averageattendancegraded'] = 'Dominio promedio';
$string['calclose'] = 'Cerrar';
$string['caleventcreated'] = 'Evento de calendario para la sesión creado exitosamente';
$string['caleventdeleted'] = 'Evento de calendario para la sesión eliminado exitosamente';
$string['calmonths'] = 'Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre';
$string['calshow'] = 'Seleccionar fecha';
$string['caltoday'] = 'Hoy';
$string['calweekdays'] = 'Do,Lu,Ma,Mi,Ju,Vi,Sa';
$string['cannottakeforgroup'] = 'No puede asignar dominio para el grupo "{$a}"';
$string['cantaddstatus'] = 'Debe asignar un acrónimo y descripción cuando agrega un nuevo estado.';
$string['categoryreport'] = 'Reporte de categoría de curso';
$string['changeattendance'] = 'Modificar dominio';
$string['changeduration'] = 'Modificar duración';
$string['changesession'] = 'Modificar sesión';
$string['checkweekdays'] = 'Seleccione días de semana que estén dentro de su rango de fechas seleccionado para la sesión.';
$string['column'] = 'columna';
$string['columns'] = 'columnas';
$string['commonsession'] = 'Todos los estudiantes';
$string['commonsessions'] = 'Todos los estudiantes';
$string['confirm'] = 'Confirmar';
$string['confirmcolumnmappings'] = 'Confirmar mapeo de columnas';
$string['confirmdeletehiddensessions'] = '¿Está seguro que desea eliminar {$a->count} sesiones planificadas antes de la fecha de inicio del curso ({$a->date})?';
$string['confirmdeleteuser'] = '¿Está seguro que desea eliminar el usuario \'{$a->fullname}\' ({$a->email})?<br/>Todos sus registros de TutorMatch serán eliminados permanentemente.';
$string['copyfrom'] = 'Copiar datos de dominio desde'; // -----------------------------------------
$string['countofselected'] = 'Cantidad de seleccionados';
$string['course'] = 'Curso';
$string['coursesummary'] = 'Reporte resumen de curso';
$string['createmultiplesessions'] = 'Crear múltiples sesiones';
$string['createmultiplesessions_help'] = 'Esta función le permite crear múltiples sesiones en un simple paso.
Las sesiones comienzan en la fecha de la sesión base y continúan hasta el la fecha \'repetir hasta\'.

  * <strong>Repetir los</strong>: Selecciona los días de la semana cuando su clase se reunirá (por ejemplo, Lunes/Miércoles/Viernes).
  * <strong>Repetir cada</strong>: Esto permite establecer una frecuencia. Si su clase se reune cada semana, seleccione 1; si se reunirá semana por medio, seleccione 2; cada tres semanas, seleccione 3, etc.
  * <strong>Repetir hasta</strong>: Seleccionar el último día de clases (el último día que desea tener sesiones).
';
$string['autoassignstatus'] = 'Automáticamente selecciona el estado más alto disponible';
$string['autoassignstatus_help'] = 'Si esto está seleccionado, a los estudiantes se les asignará la nota más alta de forma automática.';
$string['createonesession'] = 'Crear una sesión para el curso';
$string['csvdelimiter'] = 'Delimitador CSV';
$string['date'] = 'Fecha';
$string['days'] = 'Días';
$string['defaultdisplaymode'] = 'Modo de visualizavción por defecto';
$string['defaultwarnings'] = 'Advertencia por defecto establecida';
$string['defaultwarningsettings'] = 'Configuración de advertencia por defecto';
$string['defaultwarningsettings_help'] = 'Estas opciones definen las configuraciones por defecto para todas las advertencias nuevas';
$string['defaults'] = 'Configuraciones por defecto';
$string['defaultsessionsettings'] = 'Configuraciones de sesión por defecto';
$string['defaultsessionsettings_help'] = 'Estas opciones definen las configuraciones por defecto para todas las sesiones nuevas';
$string['defaultsettings'] = 'Configuraciones de dominio por defecto';
$string['defaultsettings_help'] = 'Estas opciones definen las configuraciones por defecto para todos los dominios nuevos';
$string['defaultstatus'] = 'Estado por defecto establecido';
$string['defaultsubnet'] = 'Dirección de red por defecto';
$string['defaultsubnet_help'] = 'El registro de dominio puede ser restringidio a subredes particulares por medio de especificar una lista separada por comas, de direcciones IP completas o parciales. Este es el valor por defecto utilizado cuando se crean sesiones nuevas.';
$string['defaultview'] = 'Vista por defecto al iniciar sesión';
$string['defaultview_desc'] = 'Esta es la vista por defecto mostrada a los profesores al iniciar sesión por primera vez.';
$string['delete'] = 'Eliminar';
$string['deletewarningconfirm'] = '¿Está seguro de que quiere eliminar esta advertencia?';
$string['deletedgroup'] = 'El grupo asociado con esta sesión ha sido eliminado';
$string['deletehiddensessions'] = 'Eliminar todas las sesiones ocultas';
$string['deletelogs'] = 'Eliminar información de dominio';
$string['deleteselected'] = 'Eliminar seleccionadas';
$string['deletesession'] = 'Eliminar sesión';
$string['deletesessions'] = 'Eliminar todas las sesiones';
$string['deleteuser'] = 'Eliminar usuario';
$string['deletingsession'] = 'Eliminando sesión del curso';
$string['deletingstatus'] = 'Eliminando estado del curso';
$string['description'] = 'Descripción';
$string['display'] = 'Visualización';
$string['displaymode'] = 'Modo de visualización';
$string['donotusepaging'] = 'No usar páginas';
$string['downloadexcel'] = 'Descargar en formato Excel';
$string['downloadooo'] = 'Descargar en formato OpenOffice';
$string['downloadtext'] = 'Descargar en formato de texto plano';
$string['duration'] = 'Duración';
$string['editsession'] = 'Editar Sesión';
$string['edituser'] = 'Editar usuario';
$string['emailcontent_default'] = 'Hola %userfirstname%,
Su dominio en %coursename% %attendancename% ha caído por debajo de %warningpercent% y es actualmente de %percent% - ¡Esperamos que esté bien!

Por favor contáctese con su profesor si requiere ayuda adicional.';
$string['emailcontent'] = 'Enviar contenido por e-mail';
$string['emailcontent_help'] = 'Cuando una advertencia es enviada a un estudiante, el contenido del e-mail proviene de este campo. Se pueden usar los siguientes comodines:
<ul>
<li>%coursename%</li>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%userid%</li>
<li>%warningpercent%</li>
<li>%attendancename%</li>
<li>%cmid%</li>
<li>%numtakensessions%</li>
<li>%points%</li>
<li>%maxpoints%</li>
<li>%percent%</li>
</ul>';

$string['emailsubject'] = 'Asunto del e-mail';
$string['emailsubject_help'] = 'Cuando una advertencia es enviada a un estudiante, el asunto del e-mail proviene de este campo.';
$string['emailsubject_default'] = 'Advertencia de dominio';
$string['emailuser'] = 'Envíar e-mail al usuario';
$string['emailuser_help'] = 'Si está marcada, se enviará una advertencia al estudiante.';
$string['emptyacronym'] = 'No están permitidos los acrónimos vacíos. Registro de estados no actualizado.';
$string['emptydescription'] = 'No están permitidas las descripciones vacías. Registro de estados no actualizado';
$string['enablecalendar'] = 'Crear eventos de calendario';
$string['enablecalendar_desc'] = 'Si está habilitada, se creará un evento de calendario para cada sesión. Luego de cambiar esta opción usted debería ejecutar el reinicio de reporte de calendario.';
$string['enablewarnings'] = 'Habilitar advertencias';
$string['enablewarnings_desc'] = 'Esto permite que una advertencia configurada sea definida para notificaciones de e-mail y dominio a los usuarios cuando el dominio baja de el límite configurado. <br/><strong>ADVERTENCIA: Esta es una funcionalidad nueva y no ha sido probada de forma extensa. Favor usar bajo su propio riesgo y proveer retroalimentaciónen los foros de moodle si considera que funciona bien.</strong>';
$string['encoding'] = 'Codificación';
$string['endofperiod'] = 'Fin de período';
$string['endtime'] = 'Tiempo de fin de sesión';
$string['enrolmentend'] = 'La inscripción de usuarios termina {$a}';
$string['enrolmentstart'] = 'La inscripción de usuarios comienza {$a}';
$string['enrolmentsuspended'] = 'Inscripción suspendida';
$string['error:coursenotfound'] = 'No se ha encontrado un curso con nombre abreviado {$a}.';
$string['error:coursehasnoattendance'] = 'El curso con nombre abreviado {$a} no tiene actividades TutorMatch.';
$string['error:sessioncourseinvalid'] = '¡Un curso de sesión es inválido! Saltando.';
$string['error:sessiondateinvalid'] = '¡Una fecha de sesión es inválida! Saltando.';
$string['error:sessionendinvalid'] = '¡Un tiempo de fin de sesión es inválido! Saltando.';
$string['error:sessionstartinvalid'] = '¡Un tiempo de inicio de sesión es inválido! Saltando.';
$string['errorgroupsnotselected'] = 'Seleccione uno o más grupos';
$string['errorinaddingsession'] = 'Error al agregar sesión';
$string['erroringeneratingsessions'] = 'Error al generar sesiones ';
$string['eventdurationupdated'] = 'Duración de sesión actualizada';
$string['eventreportviewed'] = 'Reporte de dominio visto'; // ---------------------------------
$string['eventscreated'] = 'Eventos de calendario creados';
$string['eventsdeleted'] = 'Eventos de calendario eliminados';
$string['eventsessionadded'] = 'Sesión agregada';
$string['eventsessiondeleted'] = 'Sesión eliminada';
$string['eventsessionsimported'] = 'Sesiones importadas';
$string['eventsessionupdated'] = 'Sesión actualizada';
$string['eventstatusadded'] = 'Estado agregado';
$string['eventstatusupdated'] = 'Estado actualizado';
$string['eventtaken'] = 'Dominio registrado';
$string['eventtakenbystudent'] = 'Dominio registrado por el estudiante';
$string['export'] = 'Exportar';
$string['extrarestrictions'] = 'Restricciones adicionales';
$string['from'] = 'de:';
$string['gradebookexplanation'] = 'Nota en registro de evaluaciones';
$string['gradebookexplanation_help'] = 'El módulo TutorMatch despliega su nota de dominio actual basada en el número de puntos que ha obtenido a la fecha y el número de puntos que podría haber obtenido a la fecha; no incluye períodos fururos de clase. En el registro de evaluaciones, su nota de dominio está basada en su porcentaje actual de dominio y el número de puntos que pueden ser obtenidos a lo largo de la duración completa del curso, incluyendo períodos futuros de clase. Así, sus notas de dominio mostradas en el módulo TutorMatch y en el registro de evaluaciones pueden no ser el mismo número de puntos pero son el mismo porcentaje.

For example, if you have earned 8 of 10 points to date (80% attendance) and attendance for the entire course is worth 50 points, the Attendance module will display 8/10 and the gradebook will display 40/50. You have not yet earned 40 points but 40 is the equivalent point value to your current attendance percentage of 80%. The point value you have earned in the Attendance module can never decrease, as it is based only on attendance to date; however, the attendance point value shown in the gradebook may increase or decrease depending on your future attendance, as it is based on attendance for the entire course.';
$string['gridcolumns'] = 'Grid columns';
$string['group'] = 'Group';
$string['groups'] = 'Groups';
$string['groupsession'] = 'Group of students';
$string['hiddensessions'] = 'Hidden sessions';
$string['hiddensessions_help'] = 'Sessions are hidden if they are scheduled before the course start date.

You can use this feature to hide older sessions instead of deleting them. Only visible sessions will appear in the Gradebook.';
$string['hiddensessionsdeleted'] = 'All hidden sessions were delete';
$string['hidensessiondetails'] = 'Hide session details';
$string['import'] = 'Import';
$string['importfile'] = 'Import file';
$string['importfile_help'] = 'Import file';
$string['importsessions'] = 'Import Sessions';
$string['identifyby'] = 'Identify student by';
$string['includeall'] = 'Select all sessions';
$string['includenottaken'] = 'Include not taken sessions';
$string['includeremarks'] = 'Include remarks';
$string['incorrectpassword'] = 'You have entered an incorrect password and your attendance has not been recorded, please enter the correct password.';
$string['indetail'] = 'In detail...';
$string['invalidaction'] = 'You must select an action';
$string['invalidemails'] = 'You must specify addresses of existing user accounts, could not find: {$a}';
$string['invalidimportfile'] = 'File format is invalid.';
$string['invalidsessionenddate'] = 'This date can not be earlier than the session date';
$string['invalidsessionendtime'] = 'The end time must be greater than start time';
$string['invalidstatus'] = 'You have selected an invalid status, please try again';
$string['jumpto'] = 'Jump to';
$string['lowgrade'] = 'Low grade';
$string['maxpossible'] = 'Maximum possible';
$string['maxpossible_help'] = 'Shows the score each user can reach if they receive the maximum points in each session not yet taken (past and future):
    <ul>
    <li><strong>Points</strong>: maximum points each user can reach over all sessions.</li>
    <li><strong>Percentage</strong>: maximum percentage each user can reach over all sessions.</li>
    </ul>';
$string['maxpossiblepercentage'] = 'Maximum possible percentage';
$string['maxpossiblepoints'] = 'Maximum possible points';
$string['maxwarn'] = 'Maximum number of e-mail warnings';
$string['maxwarn_help'] = 'The maximum number of times a warning should be sent (only one warning per session is sent)';
$string['mergeuser'] = 'Merge user';
$string['modulename'] = 'Attendance';
$string['modulename_help'] = 'The attendance activity module enables a teacher to take attendance during class and students to view their own attendance record.

The teacher can create multiple sessions and can mark the attendance status as "Present", "Absent", "Late", or "Excused" or modify the statuses to suit their needs.

Reports are available for the entire class or individual students.';
$string['modulenameplural'] = 'Attendances';
$string['months'] = 'Months';
$string['moreattendance'] = 'Attendance has been successfully taken for this page';
$string['moveleft'] = 'Move left';
$string['moveright'] = 'Move right';
$string['multisessionexpanded'] = 'Multiple sessions expanded';
$string['multisessionexpanded_desc'] = 'Show the "Multiple sessions" settings as expanded by default when creating new sessions.';
$string['mustselectusers'] = 'Must select users to export';
$string['newdate'] = 'New date';
$string['newduration'] = 'New duration';
$string['newstatusset'] = 'New set of statuses';
$string['noattendanceusers'] = 'It is not possible to export any data as there are no students enrolled in the course.';
$string['noautomark'] = 'Disabled';
$string['noattforuser'] = 'No attendance records exist for the user';
$string['nodescription'] = 'Regular class session';
$string['noeventstoreset'] = 'There are no calendar events that require an update.';
$string['nogroups'] = 'You can\'t add group sessions. No groups exists in course.';
$string['noguest'] = 'Guest can\'t see attendance';
$string['noofdaysabsent'] = 'No of days absent';
$string['noofdaysexcused'] = 'No of days excused';
$string['noofdayslate'] = 'No of days late';
$string['noofdayspresent'] = 'No of days present';
$string['nosessiondayselected'] = 'No Session day selected';
$string['nosessionexists'] = 'No Session exists for this course';
$string['nosessionsselected'] = 'No sessions selected';
$string['warningdeleted'] = 'Warning deleted';
$string['warningdesc'] = 'These warnings will be automatically added to any new attendance activities. If more than one warning is triggered at exactly the same time, only the warning with the lower warning threshold will be sent.';
$string['warningdesc_course'] = 'Warnings thresholds set here affect the absentee report and allow students and third parties to be notified.  If more than one warning is triggered at exactly the same time, only the warning with the lower warning threshold will be sent.';
$string['warnings'] = 'Warnings set';
$string['warningupdated'] = 'Updated warnings';
$string['notifytask'] = 'Send warnings to users';
$string['notfound'] = 'Attendance activity not found in this course!';
$string['notmember'] = 'not&nbsp;member';
$string['noupgradefromthisversion'] = 'The Attendance module cannot upgrade from the version of attforblock you have installed. - please delete attforblock or upgrade it to the latest version before isntalling the new attendance module';
$string['numsessions'] = 'Number of sessions';
$string['olddate'] = 'Old date';
$string['onlyselectedusers'] = 'Export specific users';
$string['overallsessions'] = 'Over all sessions'; // ------------------------
$string['overallsessions_help'] = 'Shows statistics for all sessions including those not yet taken (past and future):
    <ul>
    <li><strong>Sessions</strong>: total number of sessions.</li>
    <li><strong>Points</strong>: points awarded based on the taken sessions.</li>
    <li><strong>Percentage</strong>: percentage of points awarded over the maxium possible points for all sessions.</li>
    </ul>';
$string['oversessionstaken'] = 'Over taken sessions';
$string['oversessionstaken_help'] = 'Shows statistics for sessions where attendance has been taken:
    <ul>
    <li><strong>Sessions</strong>: number of already taken sessions.</li>
    <li><strong>Points</strong>: points awarded based on the taken sessions.</li>
    <li><strong>Percentage</strong>: percentage of points awarded over the maxium possible points of the taken sessions.</li>
    </ul>';
$string['participant'] = 'Participant';
$string['password'] = 'Password';
$string['passwordgrp'] = 'Student password';
$string['passwordgrp_help'] = 'If set students will be required to enter this password before they can set their own attendance status for the session. If empty, no password is required.';
$string['passwordrequired'] = 'You must enter the session password before you can submit your attendance';
$string['percentage'] = 'Percentage';
$string['percentageallsessions'] = 'Percentage over all sessions';
$string['percentagesessionscompleted'] = 'Percentage over taken sessions';
$string['pluginadministration'] = 'Attendance administration';
$string['pluginname'] = 'Attendance';
$string['points'] = 'Points';
$string['pointsallsessions'] = 'Points over all sessions';
$string['pointssessionscompleted'] = 'Points over taken sessions';
$string['preferences_desc'] = 'Changes to status sets will affect existing attendance sessions and may affect grading.';
$string['priorto'] = 'The session date is prior to the course start date ({$a}) so that the new sessions scheduled before this date will be hidden (not accessible). You can change the course start date at any time (see course settings) in order to have access to earlier sessions.<br><br>Please change the session date or just click the "Add session" button again to confirm?';
$string['processingfile'] = 'Processing file';
$string['randompassword'] = 'Random password';
$string['remark'] = 'Remark for: {$a}';
$string['remarks'] = 'Remarks';
$string['repeatasfollows'] = 'Repeat the session above as follows';
$string['repeatevery'] = 'Repeat every';
$string['repeaton'] = 'Repeat on';
$string['repeatuntil'] = 'Repeat until';
$string['report'] = 'Report';
$string['required'] = 'Required*';
$string['requiredentries'] = '  Temporary records overwrite participant attendance records';
$string['requiredentry'] = '  Temporary user merge help guide';
$string['requiredentry_help'] = '<p align="center"><b>Attendance</b></p>
<p align="left"><strong>Merge Accounts</strong></p>
<p align="left">
<table border="2" cellpadding="4">
<tr>
<th>Moodle User</th>
<th>Temporary User</th>
<th>Action</th>
</tr>
<tr>
<td>Attendance data</td>
<td>Attendance data</td>
<td>Temporary user will override Moodle user</td>
</tr>
<tr>
<td>No attendance data</td>
<td>Attendance data</td>
<td>Temporary user attendance will be transfered to Moodle user</td>
</tr>
<tr>
<td>Attendance data</td>
<td>No attendance data</td>
<td>Temporary user will be deleted</td>
</tr>
<tr>
<td>No attendance data</td>
<td>No attendance data</td>
<td>Temporary user will be deleted</td>
</tr>
</table>

</p>
<p align="left"><strong>Temporay user will be deleted in all cases after merge action</strong></p>';
$string['requiresubnet'] = 'Require network address';
$string['requiresubnet_help'] = 'Attendance recording may be restricted to particular subnets by specifying a comma-separated list of partial or full IP addresses.';
$string['resetcalendar'] = 'Reset calendar';
$string['resetcaledarcreate'] = 'Calendar events have been enabled but a number of existing sessions do not have events. Do you want to create calendar events for all existing sessions?';
$string['resetcaledardelete'] = 'Calendar events have been disabled but a number of existing sessions have events that should be deleted. Do you want to delete all existing events?';
$string['resetdescription'] = 'Remember that deleting attendance data will erase information from database. You can just hide older sessions having changed start date of course!';
$string['resetstatuses'] = 'Reset statuses to default';
$string['restoredefaults'] = 'Restore defaults';
$string['resultsperpage'] = 'Results per page';
$string['resultsperpage_desc'] = 'Number of students displayed on a page';
$string['save'] = 'Save attendance';
$string['search:activity'] = 'Attendance - activity information';
$string['session'] = 'Session';
$string['session_help'] = 'Session';
$string['sessionadded'] = 'Session successfully added';
$string['sessionalreadyexists'] = 'Session already exists for this date';
$string['sessiondate'] = 'Date';
$string['sessiondays'] = 'Session Days';
$string['sessiondeleted'] = 'Session successfully deleted';
$string['sessionduplicate'] = 'A duplicate session exists for course: {$a->course} in attendance: {$a->activity}';
$string['sessionexist'] = 'Session not added (already exists)!';
$string['sessiongenerated'] = 'One session was successfully generated';
$string['sessionunknowngroup'] = 'A session specifies unknown group(s): {$a}';
$string['sessions'] = 'Sessions';
$string['sessionscompleted'] = 'Taken sessions';
$string['sessionsgenerated'] = '{$a} sessions were successfully generated';
$string['sessionsids'] = 'IDs of sessions: '; // -----------------------------------------------
$string['sessionsnotfound'] = 'There is no sessions in the selected timespan';
$string['sessionstartdate'] = 'Session start date';
$string['sessionstotal'] = 'Total number of sessions';
$string['sessiontype_help'] = 'You can add sessions for all students or for a group of students. Ability to add different types depends on activity group mode.

* In group mode "No groups" you can add only sessions for all students.
* In group mode "Separate groups" you can add only sessions for a group of students.
* In group mode "Visible groups" you can add both types of sessions.
';
$string['sessiontype'] = 'Type';
$string['sessiontypeshort'] = 'Type';
$string['sessionupdated'] = 'Session successfully updated';
$string['set_by_student'] = 'Self-recorded';
$string['setallstatuses'] = 'Set status for all users';
$string['setallstatusesto'] = 'Set status for all users to «{$a}»';
$string['settings'] = 'Settings';
$string['setunmarked'] = 'Automatically set when not marked';
$string['setunmarked_help'] = 'If enabled in the session, set this status if a student has not marked their own attendance.';
$string['showdefaults'] = 'Show defaults';
$string['showduration'] = 'Show duration';
$string['showsessiondetails'] = 'Show session details';
$string['somedisabledstatus'] = '(Some options have been removed as the session has started.)';
$string['sortedgrid'] = 'Sorted grid';
$string['sortedlist'] = 'Sorted list';
$string['startofperiod'] = 'Start of period';
$string['starttime'] = 'Start time';
$string['status'] = 'Status';
$string['statusdeleted'] = 'Status deleted';
$string['statuses'] = 'Statuses';
$string['statusset'] = 'Status set {$a}';
$string['statussetsettings'] = 'Status set';
$string['strftimedm'] = '%b %d';
$string['strftimedmy'] = '%d %b %Y';
$string['strftimedmyhm'] = '%d %b %Y %I.%M%p'; // Line added to allow multiple sessions in the same day.
$string['strftimedmyw'] = '<nobr>%a %d %b %Y</nobr>';
$string['strftimeh'] = '%I%p';
$string['strftimehm'] = '%I:%M%p';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentavailability'] = 'Available for students (minutes)';
$string['studentavailability_help'] = 'When students are marking their own attendance, the number of minutes after session starts that this status is available.
 <br/>If empty, this status will always be available, If set to 0 it will always be hidden to students.';
$string['studentid'] = 'Student ID';
$string['studentmarking'] = 'Student recording';
$string['studentpassword'] = 'Student password';
$string['studentrecordingexpanded'] = 'Student recording expanded';
$string['studentrecordingexpanded_desc'] = 'Show the "Student recording" settings as expanded by default when creating new sessions.';
$string['studentscanmark'] = 'Allow students to record own attendance';
$string['studentscanmark_desc'] = 'If checked, teachers will be able to allow students to mark their own attendance.';
$string['studentscanmark_help'] = 'If checked students will be able to change their own attendance status for the session.';
$string['studentscanmarksessiontime'] = 'Students record attendance during session time';
$string['studentscanmarksessiontime_desc'] = 'If checked students can only record their attendance during the session.';
$string['studentscanmarksessiontimeend'] = 'Session end (minutes)';
$string['studentscanmarksessiontimeend_desc'] = 'If the session does not have an end time, how many minutes should the session be available for students to record their attendance.';
$string['submitattendance'] = 'Submit attendance';
$string['subnet'] = 'Subnet';
$string['subnetactivitylevel'] = 'Allow subnet config at activity level';
$string['subnetactivitylevel_desc'] = 'If enabled, teachers can override the default subnet at the activity level when creating an attendance. Otherwise the site default will be used when creating a session.';
$string['subnetwrong'] = 'Attendance can only be recorded from certain locations, and this computer is not on the allowed list.';
$string['summary'] = 'Summary';
$string['tablerenamefailed'] = 'Rename of old attforblock table to attendance failed';
$string['tactions'] = 'Action';
$string['takeattendance'] = 'Take attendance';
$string['takensessions'] = 'Taken sessions';
$string['tcreated'] = 'Created';
$string['tempaddform'] = 'Add temporary user';
$string['tempexists'] = 'There is already a temporary user with this email address';
$string['temptable'] = 'List of temporary users';
$string['tempuser'] = 'Temporary user';
$string['tempusermerge'] = 'Merge temporary user';
$string['tempusers'] = 'Temporary users';
$string['tempusersedit'] = 'Edit temporary user';
$string['tempuserslist'] = 'Temporary users';
$string['thirdpartyemailsubject'] = 'Attendance warning';
$string['thirdpartyemailtext'] = '{$a->firstname} {$a->lastname} attendance within {$a->coursename} {$a->aname} is lower than {$a->warningpercent} ({$a->percent})';
$string['thirdpartyemailtextfooter'] = 'You are receiving this because the teacher of this course has added your email to the recipient’s list';
$string['thirdpartyemails'] = 'Notify other users';
$string['thirdpartyemails_help'] = 'List of other users who will be notified. (requires the capability mod/attendance:viewreports)';
$string['thiscourse'] = 'This course';
$string['time'] = 'Time';
$string['timeahead'] = 'Multiple sessions that exceed one year cannot be created, please adjust the start and end dates.';
$string['to'] = 'to:';
$string['triggered'] = 'First notified';
$string['tuseremail'] = 'Email';
$string['tusername'] = 'Full name';
$string['graded'] = 'Graded sessions';
$string['ungraded'] = 'Ungraded sessions';
$string['unknowngroup'] = 'Unknown group';
$string['update'] = 'Update';
$string['usedefaultsubnet'] = 'Use default';
$string['userexists'] = 'There is already a real user with this email address';
$string['users'] = 'Users to export';
$string['usestatusset'] = 'Status set';
$string['variable'] = 'variable';
$string['variablesupdated'] = 'Variables successfully updated';
$string['versionforprinting'] = 'version for printing';
$string['viewmode'] = 'View mode';
$string['warnafter'] = 'Number of sessions taken before warning';
$string['warnafter_help'] = 'Warnings will only be triggered when the user has had their attendance taken for at least this number of sessions.';
$string['warningfailed'] = 'You cannot create a warning that uses the same percentage and number of sessions.';
$string['warningpercent'] = 'Warn if percentage falls under';
$string['warningpercent_help'] = 'A warning will be triggered when the overall percentage falls below this number.';
$string['warningthreshold'] = 'Warning threshold';
$string['week'] = 'week(s)';
$string['weeks'] = 'Weeks';
$string['youcantdo'] = 'You can\'t do anything';
$string['includeabsentee'] = 'Include session when calculating absentee report';
$string['includeabsentee_help'] = 'If checked this session will be included in the absentee report calculations.';
$string['attendance_no_status'] = 'No valid status was available - you may be too late to record attendance.';
$string['studentmarked'] = 'Your attendance in this session has been recorded.';