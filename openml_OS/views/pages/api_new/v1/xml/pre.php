<?php
// for function: openml.global
$this->apiErrors[100] = 'Function not valid';
$this->apiErrors[101] = 'Function not yet ported or implemented';
$this->apiErrors[102] = 'No authentication (Please provide API key for all requests other than HTTP GET)';
$this->apiErrors[103] = 'Authentication failed';
$this->apiErrors[104] = 'This is a read-only account, it does not have permission for write operations. ';
$this->apiErrors[105] = 'An Elastic Search Exception occured. ';
$this->apiErrors[106] = 'The intended action requires admin rights. ';
$this->apiErrors[107] = 'Database connection error. Usually due to high server load. Please wait for N seconds and try again. ';


// for function: openml.data.description
$this->apiErrors[110] = 'Please provide data_id';
$this->apiErrors[111] = 'Unknown dataset';
$this->apiErrors[112] = 'No access granted';
$this->apiErrors[113] = 'Could not find data file record';

// for function: openml.data.upload
$this->apiErrors[130] = 'Problem with file uploading';
$this->apiErrors[131] = 'Problem validating uploaded description file';
$this->apiErrors[132] = 'Failed to move the files';
$this->apiErrors[133] = 'Currently, only arff datasets are supported for upload. ';
$this->apiErrors[134] = 'Failed to insert record in database';
$this->apiErrors[135] = 'Please provide description xml';
$this->apiErrors[136] = 'Failed to register URL (server did not provide neccessary headers)';
$this->apiErrors[137] = 'Please provide API key';
$this->apiErrors[138] = 'Authentication failed';
$this->apiErrors[139] = 'Combination name / version already exists';
$this->apiErrors[140] = 'Both dataset file and dataset url provided. Please provide only one';
$this->apiErrors[141] = 'Neither dataset file or dataset url are provided';
$this->apiErrors[142] = 'Error in processing arff file. Can be a syntax error, or the specified target feature does not exist';
$this->apiErrors[143] = 'Suggested target feature not legal ';
$this->apiErrors[144] = 'Unable to update dataset ';
$this->apiErrors[145] = 'Error parsing dataset ARFF file';


// for function: openml.tasks.search
$this->apiErrors[151] = 'Unknown task';
$this->apiErrors[152] = 'Unknown task type';
$this->apiErrors[153] = 'Deprecated task. This kind of task is no longer supported, please find or create a new task.';

// for function: openml.tasks.inputs
$this->apiErrors[156] = 'Unknown task';
$this->apiErrors[157] = 'Task does not have any inputs';

// for function: openml.flow.upload
$this->apiErrors[160] = 'Error in file uploading';
$this->apiErrors[161] = 'Please provide description xml';
$this->apiErrors[162] = 'Please provide source or binary file';
$this->apiErrors[163] = 'Problem validating uploaded description file';
$this->apiErrors[164] = 'flow already stored in database';
$this->apiErrors[165] = 'Failed to insert flow';
$this->apiErrors[166] = 'Failed to add flow to database';
$this->apiErrors[167] = 'Illegal files uploaded';
$this->apiErrors[168] = 'The provided md5 hash equals not the server generated md5 hash of the file';
$this->apiErrors[169] = 'Please provide API key';
$this->apiErrors[170] = 'Authentication failed';
$this->apiErrors[171] = 'flow already exists';
$this->apiErrors[172] = 'Xsd not found';
$this->apiErrors[173] = 'Failed to store uploaded files to disk';

// for function: openml.flow.get
$this->apiErrors[180] = 'Please provide flow_id';
$this->apiErrors[181] = 'Unknown flow';


// for function: openml.run.upload
$this->apiErrors[201] = 'Please provide run xml';
$this->apiErrors[202] = 'Could not validate run xml by xsd';
$this->apiErrors[203] = 'Error reading the run XML';
$this->apiErrors[204] = 'Unknown task';
$this->apiErrors[205] = 'Unknown flow';
$this->apiErrors[206] = 'Invalid file type uploaded';
$this->apiErrors[207] = 'File upload failed';
$this->apiErrors[208] = 'Associated dataset does not have quality (default evaluation engine): NumberOfInstances';
$this->apiErrors[209] = 'Error parsing uploaded file. ';
$this->apiErrors[210] = 'Unable to store run';
$this->apiErrors[211] = 'Dataset not in databse';
$this->apiErrors[212] = 'Unable to store uploaded file to file system';
$this->apiErrors[213] = 'Parameter in run xml unknown';
$this->apiErrors[214] = 'Unable to store input setting';
$this->apiErrors[215] = 'Database error. Setup search query failed';
$this->apiErrors[216] = 'Error processing output data: illegal combination of evaluation measure attributes (repeat, fold, sample)';
$this->apiErrors[217] = 'Error processing output data: unknown evaluation measure';
$this->apiErrors[218] = 'Wrong flow associated with run: this implements a math_function';
$this->apiErrors[219] = 'Task does not contain field: source_data';
$this->apiErrors[220] = 'Task does not contain field: estimation_procedure';
$this->apiErrors[221] = 'Could not find associated source data record';
$this->apiErrors[222] = 'Could not find associated estimation procedure record';
$this->apiErrors[223] = 'Unable to store uploaded file in database';
$this->apiErrors[224] = 'Database insertion error, probably due to high server load. ';

// range from 225 - 239: api run

// for function: openml.run.get
$this->apiErrors[235] = 'Please provide run_id';
$this->apiErrors[236] = 'Run not found';



// for function: openml.tasks.type.search
$this->apiErrors[240] = 'Please provide task_type_id';
$this->apiErrors[241] = 'Unknown task type';

// for function: openml.authenticate
$this->apiErrors[250] = 'Please provide username';
$this->apiErrors[251] = 'Please provide password';
$this->apiErrors[252] = 'Authentication failed';

// for function: openml.data.features
$this->apiErrors[271] = 'Unknown dataset';
$this->apiErrors[272] = 'No features found';
$this->apiErrors[273] = 'Dataset not processed yet';
$this->apiErrors[274] = 'No features found. Additionally, dataset processed with error';
$this->apiErrors[275] = 'You have no right to view this item. ';

// for function: openml.setup.parameters
$this->apiErrors[280] = 'Please provide setup_id';
$this->apiErrors[281] = 'Unknown setup';

// for function: openml.authenticate.check
$this->apiErrors[290] = 'Username not provided';
$this->apiErrors[291] = 'Hash not provided';
$this->apiErrors[292] = 'Hash does not exist';

// for function: openml.task.results
$this->apiErrors[300] = 'Please provide task_id';
$this->apiErrors[301] = 'Unknown task';

// for function: openml.flow.owned
$this->apiErrors[310] = 'Please provide API key';
$this->apiErrors[311] = 'Authentication failed';
$this->apiErrors[312] = 'No flows owned by this used';

// for function: openml.flow.delete
$this->apiErrors[320] = 'Please provide API key';
$this->apiErrors[321] = 'Authentication failed';
$this->apiErrors[322] = 'flow does not exist';
$this->apiErrors[323] = 'flow is not owned by you';
$this->apiErrors[324] = 'flow is in use by other content (runs). Can not be deleted';
$this->apiErrors[328] = 'flow is in use by other content (it is a subflow). Can not be deleted';
$this->apiErrors[325] = 'Deleting flow failed.';
$this->apiErrors[326] = 'Deleting flow failed, because associated input setting fields could not be deleted.';
$this->apiErrors[327] = 'Deleting flow failed, because associated setups could not be deleted.';

// for function: openml.flow.exists
$this->apiErrors[330] = 'Mandatory fields not present.';

// for function: openml.run.getjob
$this->apiErrors[340] = 'Please provide workbench and task type.';
$this->apiErrors[341] = 'No jobs available.';

// for function: openml.data.delete
$this->apiErrors[350] = 'Please provide API key';
$this->apiErrors[351] = 'Authentication failed';
$this->apiErrors[352] = 'Dataset does not exist';
$this->apiErrors[353] = 'Dataset is not owned by you';
$this->apiErrors[354] = 'Dataset is in use by other content. Can not be deleted';
$this->apiErrors[355] = 'Deleting dataset failed.';

// for function: openml.data.qualities
$this->apiErrors[360] = 'Please provide data_id';
$this->apiErrors[361] = 'Unknown dataset';
$this->apiErrors[362] = 'No qualities found';
$this->apiErrors[363] = 'Dataset not processed yet';
$this->apiErrors[364] = 'Dataset processed with error';
$this->apiErrors[365] = 'Interval start or end illegal';

// for function: openml.data
$this->apiErrors[370] = 'Illegal filter specified';
$this->apiErrors[371] = 'Input not safe';
$this->apiErrors[372] = 'No results';
$this->apiErrors[373] = 'Can not specify an offset without a limit';

// for function: openml.qualities.upload
$this->apiErrors[381] = 'Something wrong with XML, please check did and evaluation_engine_id';
$this->apiErrors[382] = 'Please provide description xml';
$this->apiErrors[383] = 'Problem validating uploaded description file';
$this->apiErrors[384] = 'Dataset not processed yet. ';
$this->apiErrors[385] = 'No new qualities. ';
$this->apiErrors[386] = 'Quality inconsistent';
$this->apiErrors[387] = 'Quality does not exist';
$this->apiErrors[388] = 'No new qualities';
$this->apiErrors[389] = 'Quality upload failed';

// for function: openml.run.delete
$this->apiErrors[391] = 'Authentication failed';
$this->apiErrors[392] = 'Run does not exist';
$this->apiErrors[393] = 'Run is not owned by you';
$this->apiErrors[394] = 'Deleting run failed.';
$this->apiErrors[400] = 'Please provide API key';

// for function: openml.setup.delete
$this->apiErrors[401] = 'Authentication failed';
$this->apiErrors[402] = 'Setup does not exist';
$this->apiErrors[404] = 'Setup is in use by other content (runs, schedules, etc). Can not be deleted';
$this->apiErrors[405] = 'Deleting setup failed.';

// for function: openml.run.reset
$this->apiErrors[411] = 'Authentication failed';
$this->apiErrors[412] = 'Run does not exist';
$this->apiErrors[413] = 'Run is not owned by you';
$this->apiErrors[414] = 'Resetting run failed.';

// for function: openml.run.evaluate
$this->apiErrors[421] = 'Authentication failed';
$this->apiErrors[422] = 'Upload problem description XML';
$this->apiErrors[423] = 'Problem validating uploaded description file';
$this->apiErrors[424] = 'Problem opening description xml';
$this->apiErrors[425] = 'Run does not exist';
$this->apiErrors[426] = 'Run already processed';
$this->apiErrors[427] = 'Inconsistent data, evaluations found but no run_evaluated record. Please contact developers';
$this->apiErrors[428] = 'Database insertion error, probably due to high server load. ';
$this->apiErrors[429] = 'Task does not contain field: source_data';
$this->apiErrors[430] = 'Task does not contain field: estimation_procedure';
$this->apiErrors[431] = 'Could not find associated source data record';
$this->apiErrors[432] = 'Could not find associated estimation procedure record';
$this->apiErrors[433] = 'Associated dataset does not have quality (default evaluation engine): NumberOfInstances';
$this->apiErrors[434] = 'Illegal combination of evaluation measure attributes (repeat, fold, sample)';

// for function: openml.data.features.upload
$this->apiErrors[441] = 'Dataset already processed';
$this->apiErrors[442] = 'Please provide description xml';
$this->apiErrors[443] = 'Problem validating uploaded description file';
$this->apiErrors[444] = 'Could not find dataset';
$this->apiErrors[445] = 'Feature upload failed';
$this->apiErrors[446] = 'Something wrong with XML, check did and evaluation engine id';
$this->apiErrors[447] = 'Class Distribution not valid json';
$this->apiErrors[448] = 'Nominal feature is not accompanied with values';
$this->apiErrors[449] = 'Non-Nominal feature obtained values';
$this->apiErrors[450] = 'Database insert failed';

// for function: openml.task.delete
$this->apiErrors[451] = 'Authentication failed';
$this->apiErrors[452] = 'Task does not exist';
$this->apiErrors[453] = 'Task is not owned by you';
$this->apiErrors[454] = 'Task is executed in some runs. Delete these first';
$this->apiErrors[455] = 'Deleting task failed.';

// for function: openml.task.delete
$this->apiErrors[460] = 'Please provide API key';
$this->apiErrors[461] = 'Authentication failed';
$this->apiErrors[462] = 'Admin rights are required.';
$this->apiErrors[463] = 'User not found. ';
$this->apiErrors[464] = 'User has content';
$this->apiErrors[465] = 'Deleting user failed.';
$this->apiErrors[465] = 'Deleting user failed.';

// for function: openml.(entity).(un)tag
$this->apiErrors[470] = 'Internal error tagging the entity. ';
$this->apiErrors[471] = 'Please give entity_id {data_id, flow_id, run_id} and tag.';
$this->apiErrors[472] = 'Entity not found.';
$this->apiErrors[473] = 'Entity already tagged by this tag. ';
$this->apiErrors[474] = 'Database problem inserting tag. ';
$this->apiErrors[475] = 'Tag not found.';
$this->apiErrors[476] = 'Tag is not owned by you';


// openml.task.list
$this->apiErrors[480] = 'Illegal filter specified';
$this->apiErrors[481] = 'Filter input not according to constraints';
$this->apiErrors[482] = 'No results';
$this->apiErrors[483] = 'Can not specify an offset without a limit';

// openml.file.upload
$this->apiErrors[490] = 'Authentication failed';
$this->apiErrors[491] = 'File upload error';
$this->apiErrors[492] = 'File register error';

// openml.flows
$this->apiErrors[500] = 'No results';
$this->apiErrors[501] = 'Illegal filter operation';
$this->apiErrors[502] = 'Illegal filter value';
$this->apiErrors[503] = 'Can not specify an offset without a limit';

// openml.runs.list
$this->apiErrors[510] = 'Please provide at least task, flow or setup, uploader or run, to filter results. ';
$this->apiErrors[511] = 'Input not safe';
$this->apiErrors[512] = 'No results';
$this->apiErrors[513] = 'Too many results';
$this->apiErrors[514] = 'Illegal filter specified';
$this->apiErrors[515] = 'Can not specify offset without limit';
$this->apiErrors[516] = 'Requested result limit too high. ';
$this->apiErrors[517] = 'Problem with the study filter. The study should exists, be run-based and non-legacy';

// openml.estimationprocedure.list
$this->apiErrors[520] = 'No results';

// openml.evaluations.list
$this->apiErrors[540] = 'Please provide at least task, flow or setup, uploader or run, to filter results. ';
$this->apiErrors[541] = 'Input not safe';
$this->apiErrors[542] = 'No results';
$this->apiErrors[543] = 'Too many results';
$this->apiErrors[544] = 'Illegal filter specified';
$this->apiErrors[545] = 'Can not specify offset without limit';
$this->apiErrors[546] = 'Requested result limit too high. ';
$this->apiErrors[547] = 'Per fold can only be set to value "true" or "false". ';
$this->apiErrors[548] = 'Per fold queries are experimental and require a fair amount of filters on resulting run records to keep the query fast (use, e.g., flow, setup, task and uploader filter)';
$this->apiErrors[549] = 'If set, sort should be set to either "asc" or "desc"';

// openml.flow.forcedelete
$this->apiErrors[550] = 'Admin rights are required.';
$this->apiErrors[551] = 'Delete query failed.';

// openml.evaluations.list [continued]
$this->apiErrors[555] = 'Problem with the study filter. The study should exists, be run-based and non-legacy';

// openml.run.trace.upload
$this->apiErrors[561] = 'Problem with uploaded trace file.';
$this->apiErrors[562] = 'Problem validating xml trace file.';
$this->apiErrors[563] = 'Problem loading xml trace file.';
$this->apiErrors[564] = 'Database insertion error, probably due to high server load. ';


// openml.run.trace (get)
$this->apiErrors[571] = 'Run not found.';
$this->apiErrors[572] = 'No successful trace associated with this run.';

// openml.setup.exists
$this->apiErrors[581] = 'Problem with uploading the description file. ';
$this->apiErrors[582] = 'Could not validate run xml by xsd. ';
$this->apiErrors[583] = 'Error reading the XML document. ';
$this->apiErrors[584] = 'Unknown flow. ';
$this->apiErrors[585] = 'Wrong flow associated with run: this implements a math_function. ';
$this->apiErrors[586] = 'Parameter in run xml unknown. ';
$this->apiErrors[587] = 'Partial setup did not match any setups. ';
$this->apiErrors[588] = 'Database error: search setups query failed. ';

// openml.study.delete
$this->apiErrors[591] = 'Authentication failed';
$this->apiErrors[592] = 'Study does not exist';
$this->apiErrors[593] = 'Deleting study failed';
$this->apiErrors[594] = 'Study not owned by this user';
$this->apiErrors[595] = 'Can only delete studies based on runs or studies in preparation';

// openml.study.list
$this->apiErrors[596] = 'Illegal filter. ';
$this->apiErrors[597] = 'Illegal filter input. '; 
$this->apiErrors[598] = 'Can only set an offset if limit is also specified. ';
$this->apiErrors[599] = 'No studies according to the specified criteria. ';

// openml.study.get
$this->apiErrors[600] = 'Api function invoked wrong. Unknown knowledge type. ';
$this->apiErrors[601] = 'Study does not exist. ';
$this->apiErrors[602] = 'Study not visible for you. ';
$this->apiErrors[603] = 'Study does not contain any associated tags (should have at least one). ';
$this->apiErrors[604] = 'Illegal main knowledge type for study (please contact support team). ';

// openml.task.upload (continued)

$this->apiErrors[611] = 'Description file not present';
$this->apiErrors[612] = 'Xsd not found';
$this->apiErrors[613] = 'Problem validating uploaded description file';
$this->apiErrors[614] = 'Task already exists.';
$this->apiErrors[615] = 'Error creating the task.';
$this->apiErrors[616] = 'Task contains illegal inputs.';
$this->apiErrors[617] = 'Task contains duplicate inputs.';
$this->apiErrors[618] = 'Task does not contain all required inputs.';
$this->apiErrors[619] = 'Could not decode task inputs constraints json. Please contact developers.';
$this->apiErrors[620] = 'Could not find data_type field or the correct function. Please contact developers.';
$this->apiErrors[621] = 'Task data type not in the right format.';
$this->apiErrors[622] = 'Input value does not match allowed values in foreign column.';
$this->apiErrors[623] = 'Tasks can only be created upon active datasets.';

// openml.data.feature.quality
$this->apiErrors[631] = 'Please provide data_id';
$this->apiErrors[632] = 'Unknown dataset';
$this->apiErrors[633] = 'No qualities found';
$this->apiErrors[634] = 'Dataset not processed yet';
$this->apiErrors[635] = 'Dataset processed with error';

// openml.data.quality.list
$this->apiErrors[641] = 'No results';

// openml.data.feature.quality.list
$this->apiErrors[651] = 'No results';

// openml.setups.setup_counts
$this->apiErrors[661] = 'No results';

// opennml.setups.list
$this->apiErrors[670] = 'Please specify at least one filter. ';
$this->apiErrors[671] = 'Illegal filter. ';
$this->apiErrors[672] = 'Illegal filter input. ';
$this->apiErrors[673] = 'Result set too big. Please use one of the filters or the limit option. ';
$this->apiErrors[674] = 'No results, please check the filter. ';
$this->apiErrors[675] = 'Can not specify offset without limit';
$this->apiErrors[676] = 'Requested result limit too high. ';

// openml.data.unprocessed
$this->apiErrors[681] = 'No unprocessed datasets. ';

// openml.data.unprocessed
$this->apiErrors[686] = 'Please specify the features the evaluation engine wants to calculate (at least 2). ';
$this->apiErrors[687] = 'No unprocessed datasets according to the given set of meta-features. ';
$this->apiErrors[688] = 'Requesting unknown qualities. ';

// openml.data.status.update
$this->apiErrors[691] = 'Illegal status';
$this->apiErrors[692] = 'Dataset does not exist';
$this->apiErrors[693] = 'Dataset is not owned by you';
$this->apiErrors[694] = 'Illegal status transition';
$this->apiErrors[695] = 'Status update failed';
$this->apiErrors[696] = 'Only admins can activate datasets';

// openml.votes.list
$this->apiErrors[701] = 'List failed';

// openml.votes.votesofuser
$this->apiErrors[702] = 'List failed';

// openml.votes.delete
$this->apiErrors[703] = 'Unknown vote';

// openml.votes.delete
$this->apiErrors[704] = 'Deletion failed';

// openml.votes.do
$this->apiErrors[705] = 'Insertion failed';

// openml.votes.do / openml.votes.delete
$this->apiErrors[711] = 'Unknown knowledge type';

// openml.votes.delete
$this->apiErrors[721] = 'Unauthorized deletion';

// openml.votes.do
$this->apiErrors[722] = 'Unauthorized vote';

// TODO: Make the gamification errors adjacent. (Now we kind of hijacked 
// 730-800 for normal features)

// for function: openml.estimationprocedure.get
$this->apiErrors[730] = 'Please provide estimationprocedure_id';
$this->apiErrors[731] = 'estimationprocedure_id not valid';

// openml.votes.list
$this->apiErrors[801] = 'List failed';

// openml.votes.votesofuser
$this->apiErrors[802] = 'List failed';

// openml.votes.delete
$this->apiErrors[803] = 'Unknown vote';

// openml.votes.delete
$this->apiErrors[804] = 'Deletion failed';

// openml.votes.do
$this->apiErrors[805] = 'Insertion failed';

// openml.votes.do / openml.votes.delete
$this->apiErrors[811] = 'Unknown knowledge type';

// openml.votes.delete
$this->apiErrors[821] = 'Unauthorized deletion';

// openml.votes.do
$this->apiErrors[822] = 'Unauthorized vote';

//openml.gamification
$this->apiErrors[901] = 'No such user';
$this->apiErrors[902] = 'Unauthorized gamification request';

//openml.gamification.activity
$this->apiErrors[903] = 'Invalid type';

//openml.badges
$this->apiErrors[950] = 'No such badge';

// openml.tags.list_tags (in MY_API_Model.py)
$this->apiErrors[1001] = 'Not a taggable item (this should never happen)';
$this->apiErrors[1002] = 'No tags available';

// openml.evaluations.request
$this->apiErrors[1011] = 'Illegal filter';
$this->apiErrors[1012] = 'Input does not comply to constraints';
$this->apiErrors[1013] = 'No unevaluated runs according to the criteria';
$this->apiErrors[1014] = 'No value specified for filter';

// for function: openml.data.reset
$this->apiErrors[1021] = 'Dataset does not exist';
$this->apiErrors[1022] = 'Dataset is not owned by you';
$this->apiErrors[1023] = 'Resetting dataset failed.';

// for function: openml.study.upload
$this->apiErrors[1031] = 'No description file uploaded';
$this->apiErrors[1032] = 'Description file does not correspond to XSD schema';
$this->apiErrors[1033] = 'Illegal main entity type.';
$this->apiErrors[1034] = 'can only link entities of the type main_entity_type';
$this->apiErrors[1035] = 'Can only register benchmark suite if main entity type is run';
$this->apiErrors[1036] = 'Referred benchmark suite not found';
$this->apiErrors[1037] = 'Referred benchmark suite should have main entity type task';
$this->apiErrors[1038] = 'Study alias not unique';
$this->apiErrors[1039] = 'Database insertion problem';

// for function: openml.study.attach/detach
$this->apiErrors[1041] = 'Could not find study';
$this->apiErrors[1042] = 'Can not attach/detach to legacy studies';
$this->apiErrors[1043] = 'Please provide post field: ids';
$this->apiErrors[1044] = 'Please ensure that post field ids contains a list of natural numbers';
$this->apiErrors[1045] = 'Problem attaching entities. Please ensure to only attach entities that exist';
$this->apiErrors[1046] = 'Problem detaching entities.';
$this->apiErrors[1047] = 'Can only attach or detach if status is in preparation.';

// for function: openml.study.status update
$this->apiErrors[1051] = 'Not legal status to update to';
$this->apiErrors[1052] = 'Could not find study';
$this->apiErrors[1053] = 'Study not owned by you';
$this->apiErrors[1054] = 'Problem inserting in database';


//openml.data.edit
$this->apiErrors[1060] = 'Problem validating edit_parameters xml';
$this->apiErrors[1061] = 'Please provide edit_parameters xml';
$this->apiErrors[1062] = 'Data ID is required';
$this->apiErrors[1063] = 'Unknown dataset';
$this->apiErrors[1064] = 'Please provide atleast one field among description, creator, contributor, collection_date, language, citation, original_data_url, default_target_attribute, row_id_attribute, ignore_attribute or paper_url to edit. ';
$this->apiErrors[1065] = 'Critical features default_target_attribute, row_id_attribute and ignore_attribute can be edited only by the owner. Fork the dataset if changes are required.';
$this->apiErrors[1066] = 'Critical features default_target_attribute, row_id_attribute and ignore_attribute can only be edited for datasets without any tasks.';
$this->apiErrors[1067] = 'Data description insert failed';
$this->apiErrors[1068] = 'Dataset update failed';

//openml.data.edit
$this->apiErrors[1070] = 'Data ID is required';
$this->apiErrors[1071] = 'Unknown dataset';
$this->apiErrors[1072] = 'Failed to insert record in database';


//openml.data.topic
$this->apiErrors[1080] = 'Please provide a dataset id and a topic.';
$this->apiErrors[1081] = 'Unknown dataset.';
$this->apiErrors[1082] = 'Topic can only be added/removed by admin.';
$this->apiErrors[1083] = 'The topic you provided is already added for this dataset.';
$this->apiErrors[1084] = 'Failed to insert record in database.';

$this->apiErrors[1085] = 'Failed to find record in database.';

//openml.list.data.description
$this->apiErrors[1090] = 'Failed to find description versions for this dataset/Unknown dataset';

?>
