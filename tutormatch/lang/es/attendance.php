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

Por ejemplo, si a la fecha ha obtenido 8 de 10 puntos (80% de dominio) y el dominio para el curso completo vale 50 puntos, el módulo TutorMatch mostrará 8/10 y el registro de evaluaciones mostrará 40/50. Aún no ha obtenido 40 putos pero 40 es el valor equivalente en puntos de su porcentaje de dominio actual de 80%. El valor en puntos que ha obtenido en el módulo TutorMatch nunca puede decrecer, porque sólo está basado en en el dominio a la fecha; however, sin embardo, el valor del dominio en puntos mostrado en el registro de evaluaciones puede incrementar o decrementar dependiendo de su dominio futuro, pues está basado en el dominio para el curso completo.';
$string['gridcolumns'] = 'Columnas de cuadrícula';
$string['group'] = 'Grupo';
$string['groups'] = 'Grupos';
$string['groupsession'] = 'Grupo de estudiantes';
$string['hiddensessions'] = 'Sesiones ocultas';
$string['hiddensessions_help'] = 'Las sesiones están ocultas si están programadas antes de la fecha de inicio del curso.

Puede usar esta funcionalidad para ocultar sesiones antiguas en vez de eliminarlas. En el registro de evaluaciones sólo aparecerán sesiones visibles.';
$string['hiddensessionsdeleted'] = 'Todas las sesiones ocultas fueron eliminadas';
$string['hidensessiondetails'] = 'Ocultar detalles de sesión';
$string['import'] = 'Importar';
$string['importfile'] = 'Importar archivo';
$string['importfile_help'] = 'Importar archivo';
$string['importsessions'] = 'Importar Sesiones';
$string['identifyby'] = 'Identificar estudiante por';
$string['includeall'] = 'Seleccionar todas las sesiones';
$string['includenottaken'] = 'Incluír sesiones no tomadas';
$string['includeremarks'] = 'Incluír comentarios';
$string['incorrectpassword'] = 'Ha ingresado una contraseña incorrecta y su dominio no ha sido registrado, por favor ingrese la contraseña correcta.';
$string['indetail'] = 'En detalle...';
$string['invalidaction'] = 'Debe seleccionar una acción';
$string['invalidemails'] = 'Debe especificar direcciones de cuentas de usuario existentes, no se pudo encontrar: {$a}';
$string['invalidimportfile'] = 'Formato de archivo inválido.';
$string['invalidsessionenddate'] = 'Esta fecha no puede ser anterior a la fecha de la sesión';
$string['invalidsessionendtime'] = 'El tiempo de fin debe ser posterior a la fecha de inicio';
$string['invalidstatus'] = 'Ha seleccionado un estado inválido, por favor inténtelo de nuevo';
$string['jumpto'] = 'Saltar a';
$string['lowgrade'] = 'Nota baja';
$string['maxpossible'] = 'Máximo posible';
$string['maxpossible_help'] = 'Muestra el puntaje que cada usuario puede obtener si recibe el máximo de puntos en cada sesión que aún no se ha tomado (pasadas y futuras):
    <ul>
    <li><strong>Puntos</strong>: máximo de puntos que cada usuario puede obtener contando todas las sesiones.</li>
    <li><strong>Porcentaje</strong>: porcentaje máximo que cada usuario puede obtener contando todas las sesiones.</li>
    </ul>';
$string['maxpossiblepercentage'] = 'Porcentaje máximo posible';
$string['maxpossiblepoints'] = 'Puntaje máximo posible';
$string['maxwarn'] = 'Número máximo de advertencias por e-mail';
$string['maxwarn_help'] = 'El número máximo de veces que se debe enviar una advertencia (sólo se envía una advertencia por sesión)';
$string['mergeuser'] = 'Combinar usuario';
$string['modulename'] = 'TutorMatch';
$string['modulename_help'] = 'El módulo TutorMatch permite al profesor usar la metodología TutorMatch, ver el dominio de los temas que los estudiantes han reportado, entre otra información.

El profesor puede crear temas, agregarles información, y agendar sesiones de TutorMatch. Los estudiantes pueden marcar si dominan los temas, ver las sesiones, y ver los temas e integrantes de grupo que les tocarán en cada ronda durante la sesión.

Están disponibles reportes para la clase completa, para estudiantes individuales y para temas individuales.';
$string['modulenameplural'] = 'TutorMatch';
$string['months'] = 'Meses';
$string['moreattendance'] = 'El dominio para esta página se ha registrado de forma exitosa';
$string['moveleft'] = 'Mover a la izquierda';
$string['moveright'] = 'Mover a la derecha';
$string['multisessionexpanded'] = 'Múltiples sesiones expandidas';
$string['multisessionexpanded_desc'] = 'Mostrar por defect como expandidas las opciones de "Sesiones múltiples" al crear nuevas sesiones.';
$string['mustselectusers'] = 'Debe seleccionar usuarios para exportar';
$string['newdate'] = 'Nueva fecha';
$string['newduration'] = 'Nueva duración';
$string['newstatusset'] = 'Nuevo conjunto de estados'; // NU
$string['noattendanceusers'] = 'No es posible exportar datos porque no hay estudiantes registrados en el curso.';
$string['noautomark'] = 'Deshabilitado';
$string['noattforuser'] = 'No existen registros de dominio para el usuario';
$string['nodescription'] = 'Sesión normal de clase';
$string['noeventstoreset'] = 'No hay eventos de calendario que requieran una actualización.';
$string['nogroups'] = 'No puede agregar sesiones de grupo. No existen grupos en el curso.';
$string['noguest'] = 'Los invitados no pueden ver la información de dominio';
$string['noofdaysabsent'] = 'N° de temas sin dominio';
$string['noofdaysexcused'] = 'No of days excused'; // NU
$string['noofdayslate'] = 'No of days late'; // NU
$string['noofdayspresent'] = 'N° de temas dominados';
$string['nosessiondayselected'] = 'No ha seleccionado un día de sesión';
$string['nosessionexists'] = 'No existen sesiones para este curso';
$string['nosessionsselected'] = 'No ha seleccionado sesiones';
$string['warningdeleted'] = 'Advertencia eliminada';
$string['warningdesc'] = 'Estas advertencias serán automáticamente agregadas a cualquier actividad TutorMatch nueva. Si se gatilla más de una advertencia a la vez, sólo se enviará la advertencia con el menor umbral.';
$string['warningdesc_course'] = 'Los umbrales de advertancia establecidos aquí afectan el reporte de dominio y permiten que se notifique a estudiantes y terceras partes. Si se gatilla más de una advertencia a la vez, sólo se enviará la advertencia con el menor umbral.';
$string['warnings'] = 'Advertencias establecidas';
$string['warningupdated'] = 'Advertencias Actualizadas';
$string['notifytask'] = 'Enviar advertencias a usuarios';
$string['notfound'] = '¡Actividad TutorMatch no encontrada en este curso!';
$string['notmember'] = 'no&nbsp;miembro';
$string['noupgradefromthisversion'] = 'El módulo TutorMatch no puede actualizarse desde la versión de attforblock que tiene instalada. - por favor elimine attforblock o actualízelo a la versión más reciente antes de instalar el nuevo módulo TutorMatch';
$string['numsessions'] = 'Número de sesiones';
$string['olddate'] = 'Fecha anterior';
$string['onlyselectedusers'] = 'Exportar usuarios específicos';
$string['overallsessions'] = 'En todas las sesiones'; // ------------------------
$string['overallsessions_help'] = 'Muestra estadísticas para todas las sesiones incluyendo las que aún no se llevan a cabo (pasadas y futuras):
    <ul>
    <li><strong>Sesiones</strong>: número total de sesiones.</li>
    <li><strong>Puntos</strong>: puntos otorgados en base a dominio.</li>
    <li><strong>Porcentaje</strong>: porcentaje de puntos otorgados respecto del número máximo de puntos para todos los temas.</li>
    </ul>';
$string['oversessionstaken'] = 'En las pasadas'; 
$string['oversessionstaken_help'] = 'Muestra estadísticas para las sesiones que ya se han llevado a cabo:
    <ul>
    <li><strong>Sesiones</strong>:número de sesiones llevadas a cabo.</li>
    <li><strong>Puntos</strong>: puntos otorgados en base al dominio.</li>
    <li><strong>Porcentaje</strong>: porcentaje de puntos otorgados en las sesiones ya hechas.</li>
    </ul>';
$string['participant'] = 'Participante';
$string['password'] = 'Contraseña';
$string['passwordgrp'] = 'Contraseña de estudiante';
$string['passwordgrp_help'] = 'Si se crea los estudiantes tendrán que ingresar esta contraseña antes de poder ingresar su dominio para el tema. Si se deja vacío no se requeriráuna contraseña.';
$string['passwordrequired'] = 'Debe ingresar la contraseña de estudiante antes de ingresar su dominio para el tema';
$string['percentage'] = 'Porcentaje';
$string['percentageallsessions'] = 'Porcentaje en todas las sesiones';
$string['percentagesessionscompleted'] = 'Porcentaja en las sesiones pasadas';
$string['pluginadministration'] = 'Administración de TutorMatch';
$string['pluginname'] = 'TutorMatch';
$string['points'] = 'Puntos';
$string['pointsallsessions'] = 'Puntos en todas las sesiones';
$string['pointssessionscompleted'] = 'Puntos en las sesiones pasadas';
$string['preferences_desc'] = 'Cambios en los conjuntos de estados afectarán a las sesiones existentes y podrían afectar las notas.'; // NU
$string['priorto'] = 'La fecha de la sesión es anterior a la de inicio del curso ({$a}) de forma qu las nuevas sesiones agendadas antes de esta fecha estarán ocultas (no accesibles). Puede cambiar la fecha de inicio del curso en cualquier momento (ver opciones de curso) para tener acceso a sesiones anteriores.<br><br>Por favor cambioe la fecha de la sesión o simplemente presione nuevamente el botón "Agregar sesión" para confirmar.';
$string['processingfile'] = 'Procesando archivo';
$string['randompassword'] = 'Contraseña al azar';
$string['remark'] = 'Comentario para: {$a}';
$string['remarks'] = 'Comentarios';
$string['repeatasfollows'] = 'Repetir la sesión de arriba de la forma siguiente';
$string['repeatevery'] = 'Repetir cada';
$string['repeaton'] = 'Repetir los';
$string['repeatuntil'] = 'Repetir hasta';
$string['report'] = 'Reporte';
$string['required'] = 'Obligatorio*';
$string['requiredentries'] = '  Registros temporales sobreescriben los registros de dominio de los participantes';
$string['requiredentry'] = '  Guía de ayuda de combinación de usuario temporal';
$string['requiredentry_help'] = '<p align="center"><b>TutorMatch</b></p>
<p align="left"><strong>Combinar cuentas</strong></p>
<p align="left">
<table border="2" cellpadding="4">
<tr>
<th>Usuario Moodle</th>
<th>Usuario Temporal</th>
<th>Acción</th>
</tr>
<tr>
<td>Datos de dominio</td>
<td>Datos de dominio</td>
<td>El usuario temporal anulará al usuario Moodle</td>
</tr>
<tr>
<td>No hay datos de dominio</td>
<td>Datos de dominio</td>
<td>Los datos de dominio del usuario temporal serán transferidos al usuario Moodle</td>
</tr>
<tr>
<td>Datos de dominio</td>
<td>No hay datos de dominio</td>
<td>El usuario temporal será eliminado</td>
</tr>
<tr>
<td>No hay datos de dominio</td>
<td>No hay datos de dominio</td>
<td>El usuario temporal será eliminado</td>
</tr>
</table>

</p>
<p align="left"><strong>El usuario temporal será eliminado en todos los casos luego de la acción de combinación</strong></p>';
$string['requiresubnet'] = 'Requerir dirección de red';
$string['requiresubnet_help'] = 'El registro de dominio puede ser restringido a subredes particulares especificando una lista separada por comas de direcciones IP parciales o completas.';
$string['resetcalendar'] = 'Restaurar calendario';
$string['resetcaledarcreate'] = 'Los eventos de calendario han sido habilitados pero un número de sesiones existentes no tienen eventos. ¿Desea crear eventos de calendario para todas las sesiones existentes?';
$string['resetcaledardelete'] = 'Los eventos de calendario han sido deshabilitados pero un número de sesiones existentes tienen eventos que deberían haber sido eliminados. ¿Desea eliminar todos los eventos existentes?';
$string['resetdescription'] = 'Recuerde que eliminar los datos de dominio eliminará información de la base de datos. ¡Puede simplemente ocultar sesiones antiguas cambiando la fecha de inicio del curso!';
$string['resetstatuses'] = 'Restaurar estados a valores por defecto';
$string['restoredefaults'] = 'Restaurar valores por defecto';
$string['resultsperpage'] = 'Resultados por página';
$string['resultsperpage_desc'] = 'Número de estudiantes desplegados en una página';
$string['save'] = 'Guardar dominio';
$string['search:activity'] = 'TutorMatch - información de actividad';
$string['session'] = 'Sesión';
$string['session_help'] = 'Sesión';
$string['sessionadded'] = 'Sesión exitosamente agregada';
$string['sessionalreadyexists'] = 'Una sesión ya existe para esta fecha';
$string['sessiondate'] = 'Fecha';
$string['sessiondays'] = 'Días de Sesión';
$string['sessiondeleted'] = 'Sesión exitosamente eliminada';
$string['sessionduplicate'] = 'Una sesión duplicada existe para el curso: {$a->course} en TutorMatch: {$a->activity}';
$string['sessionexist'] = '¡Sesión no agregada (ya existe)!';
$string['sessiongenerated'] = 'Una sesión fue generada con éxito';
$string['sessionunknowngroup'] = 'Una sesión especifica grupo(s) desconocido(s): {$a}';
$string['sessions'] = 'Sesiones';
$string['sessionscompleted'] = 'Sesiones pasadas';
$string['sessionsgenerated'] = '{$a} sesiones fueron generadas exitosamente';
$string['sessionsids'] = 'IDs de sesiones: '; // -----------------------------------------------
$string['sessionsnotfound'] = 'No hay sesiones en el lapso de tiempo seleccionado';
$string['sessionstartdate'] = 'Fecha de inicio de sesión';
$string['sessionstotal'] = 'Número total de sesiones';
$string['sessiontype_help'] = 'Puede agregar sesiones para todos los estudiantes o para un grupo de estudiantes. La capacidad de agregar diferentes tipos depende del modo de grupo de la actividad.

* En el modo "Sin grupos" sólo puede agregar sesiones para todos los estudiantes.
* En el modo "Grupos separados" sólo puede agregar sesiones para grupos de estudiantes.
* En el modo "Grupos visibles" puede agregar ambos tipos de sesiones.
';
$string['sessiontype'] = 'Tipo';
$string['sessiontypeshort'] = 'Tipo';
$string['sessionupdated'] = 'Sesión actualizada con éxito';
$string['set_by_student'] = 'Auto-registrado';
$string['setallstatuses'] = 'Establecer estado para todos los usuarios';
$string['setallstatusesto'] = 'Establecer estado para todos los usuarios a «{$a}»';
$string['settings'] = 'Configuración';
$string['setunmarked'] = 'Establecer de forma automática cuando no se ha marcado';
$string['setunmarked_help'] = 'Si está habilitado en la sesión, establecer este estado si un estudiante no ha marcado su dominio.';
$string['showdefaults'] = 'Mostrar por defecto';
$string['showduration'] = 'Mostrar duración';
$string['showsessiondetails'] = 'Mostrar detalles de sesión';
$string['somedisabledstatus'] = '(Algunas opciones han sido removidas pues la sesión ha comenzado.)';
$string['sortedgrid'] = 'Cuadrícula ordenada';
$string['sortedlist'] = 'Lista ordenada';
$string['startofperiod'] = 'Inicio de período';
$string['starttime'] = 'Hora de inicio';
$string['status'] = 'Estado';
$string['statusdeleted'] = 'Estado eliminado';
$string['statuses'] = 'Estados';
$string['statusset'] = 'Estado establecido {$a}';
$string['statussetsettings'] = 'Estado establecido';
$string['strftimedm'] = '%b %d';
$string['strftimedmy'] = '%d %b %Y';
$string['strftimedmyhm'] = '%d %b %Y %I.%M%p'; // Line added to allow multiple sessions in the same day.
$string['strftimedmyw'] = '<nobr>%a %d %b %Y</nobr>';
$string['strftimeh'] = '%I%p';
$string['strftimehm'] = '%I:%M%p';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentavailability'] = 'Disponible para estudiantes (minutos)';
$string['studentavailability_help'] = 'Cuando los estudiantes están marcando su propio dominio, el número de minutos luego del inicio de la sesión en que este estado está disponible.
 <br/>Si se deja vacío, este estado siempre estará disponible. Si se asigna 0, siempre estará oculto a los estudiantes.';
$string['studentid'] = 'ID de Estudiante';
$string['studentmarking'] = 'Estudiante registrando';
$string['studentpassword'] = 'Contraseña de estudiante';
$string['studentrecordingexpanded'] = 'Estudiante registrando expandido';
$string['studentrecordingexpanded_desc'] = 'Mostrar la configuración de "Estudiante registrando" como expandida por defecto cuando se crean nuevas sesiones.';
$string['studentscanmark'] = 'Permitir a los estudiantes registrar su propio dominio';
$string['studentscanmark_desc'] = 'Si está marcado, los profesores serán capaces de permitir que los estudiantes marquen su propio dominio.';
$string['studentscanmark_help'] = 'Si está marcado los estudiantes serán capaces de cambiar su propio dominio para la sesión.';
$string['studentscanmarksessiontime'] = 'Los estudiantes registran su dominio durante la duración de la sesión';
$string['studentscanmarksessiontime_desc'] = 'Si está marcado los estudiantes sólo podrán marcar su dominio durante la sesión.';
$string['studentscanmarksessiontimeend'] = 'Fin de sesión (minutos)';
$string['studentscanmarksessiontimeend_desc'] = 'Si la sesión no tiene un tiempo de fin, este será el número de minutos que la sesión estará disponible para que los estudiantes registren su dominio.';
$string['submitattendance'] = 'Enviar dominio';
$string['subnet'] = 'Subred';
$string['subnetactivitylevel'] = 'Permitir configuración de subred al nivel de la actividad';
$string['subnetactivitylevel_desc'] = 'Si está habilitado los profesores pueden invalidar la subred por defecto al nivel de la actividad al agregar TutorMatch. De otro modo se usará la por defecto del sitio al crear una sesión.';
$string['subnetwrong'] = 'El dominio sólo puede ser registrado desde ciertos lugares, y este computador no está en la lista de permitidos.';
$string['summary'] = 'Resumen';
$string['tablerenamefailed'] = 'Cambio de nombre de tabla attforblock antigua a dominio fallido';
$string['tactions'] = 'Acción';
$string['takeattendance'] = 'Registrar dominio';
$string['takensessions'] = 'Sesiones pasadas';
$string['tcreated'] = 'Creado';
$string['tempaddform'] = 'Agregar usuario temporal';
$string['tempexists'] = 'Ya hay un usuario temporal con esta dirección de correo electónico';
$string['temptable'] = 'Lista de usuarios temporales';
$string['tempuser'] = 'Usuario temporal';
$string['tempusermerge'] = 'Combinar usuario temporal';
$string['tempusers'] = 'Usuarios temporales';
$string['tempusersedit'] = 'Editar usuario temporal';
$string['tempuserslist'] = 'Usuarios temporales';
$string['thirdpartyemailsubject'] = 'Advertencia de dominio';
$string['thirdpartyemailtext'] = '{$a->firstname} {$a->lastname} dominio en {$a->coursename} {$a->aname} es más bajo que {$a->warningpercent} ({$a->percent})';
$string['thirdpartyemailtextfooter'] = 'Está recibiendo esto porque el profesor del curso ha agregado su correo electrónico a la lista de destinatarios';
$string['thirdpartyemails'] = 'Notificar a otros usuarios';
$string['thirdpartyemails_help'] = 'Lista de otros usuariosque serán notificados. (requiere capacidad mod/attendance:viewreports)';
$string['thiscourse'] = 'Este curso';
$string['time'] = 'Tiempo';
$string['timeahead'] = 'Múltiples sesiones que exceden un año no pueden ser creadas, por favor ajuste las fechas de inicio y término.';
$string['to'] = 'para:';
$string['triggered'] = 'Primera notificación';
$string['tuseremail'] = 'Correo electrónico';
$string['tusername'] = 'Nombre completo';
$string['graded'] = 'Sesiones evaluadas';
$string['ungraded'] = 'Sesiones no evaluadas';
$string['unknowngroup'] = 'Grupo desconocido';
$string['update'] = 'Actualización';
$string['usedefaultsubnet'] = 'Usar la por defecto';
$string['userexists'] = 'Ya hay un usuario real con esta dirección de correo electrónico';
$string['users'] = 'Usuarios a exportar';
$string['usestatusset'] = 'Estado establecido';
$string['variable'] = 'variable';
$string['variablesupdated'] = 'Variables actualizadas de forma exitosa';
$string['versionforprinting'] = 'versión para impresión';
$string['viewmode'] = 'Modo de visualización';
$string['warnafter'] = 'Número de sesiones antes de advertencia';
$string['warnafter_help'] = 'Sólo se gatillarán advertencias cuando el usuario haya registrado su dominio para al menos este número de temas.';
$string['warningfailed'] = 'No puede crear una advertencia que use el mismo porcentaje y número de temas.';
$string['warningpercent'] = 'Advertir si el porcentaje cae por debajo de';
$string['warningpercent_help'] = 'Una advertencia será gatillada cuando el porcentage total caiga debajo de este número.';
$string['warningthreshold'] = 'Umbral de advertencia';
$string['week'] = 'semana(s)';
$string['weeks'] = 'Semanas';
$string['youcantdo'] = 'No puede hacer nada';
$string['includeabsentee'] = 'Incluír el tema cuando se calcula el reporte de dominio';
$string['includeabsentee_help'] = 'Si está activa este tema será incluída en el cálculo del reporte de dominio.';
$string['attendance_no_status'] = 'No hay estados válidos disponibles - puede haberse tardado mucho en registrar su dominio.';
$string['studentmarked'] = 'Su dominio para este tema ha sido registrado.';
$string['topics'] = 'Temas';
$string['topicstable'] = 'Lista de temas';
$string['topicname'] = 'Nombre';
$string['edittopic'] = 'Editar tema';
$string['deletetopic'] = 'Eliminar tema';