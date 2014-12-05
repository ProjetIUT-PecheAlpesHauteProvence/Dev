<?php

App::uses('UsersAppModel', 'Users.Model');
App::uses('AuthComponent', 'Controller/Component');

/**
 * User
 *
 * @category Model
 * @package  Croogo.Users.Model
 * @version  1.0
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class User extends UsersAppModel {


/**
 * Model name
 *
 * @var string
 * @access public
 */
	public $name = 'User';

/**
 * Behaviors used by the Model
 *
 * @var array
 * @access public
 */
	public $actsAs = array(
		'Acl' => array(
			'className' => 'Croogo.CroogoAcl',
			'type' => 'requester',
		),
		'Croogo.Trackable',
		'Search.Searchable',
	);

/**
 * Model associations: belongsTo
 *
 * @var array
 * @access public
 */
	public $belongsTo = array('Users.Role');

/**
 * Validation
 *
 * @var array
 * @access public
 */
	public $validate = array(
		'username' => array(
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'Ce nom d\'utilisateur déjà utilisé !',
				'last' => true,
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Veuillez renseigner votre nom d\'utilisateur !',
				'last' => true,
			),
			'validAlias' => array(
				'rule' => '/^[a-zA-Z\-_0-9]+$/',
				'message' => 'Caractères autorisés :chiffres ,lettres, -, _',
				'last' => true,
			),
		),
		'email' => array(
			'email' => array(
				'rule' => 'email',
				'message' => 'Addresse Email invalide !',
				'last' => true,
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'Adresse Email déjà utilisé !',
				'last' => true,
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Veuillez renseigner votre email !',
				'last' => true,
			),
		),
		'verify_email' => array(
	    	'verify_email-rule-1' => array(
	            'rule' => 'notEmpty',
	            'message' => 'Veuillez confirmer votre mail !',
	            
	        ),
	    	'verify_email-rule-2' => array(
	            'rule' => array('equaltofield','email'),
	            'message' => 'Le mail et la confirmation du mail doivent être identiques !',
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
				
            ),
        ),
		'password' => array(
			'lenght' => array(
				'rule' => array('minLength', 6),
				'message' => 'Passwords must be at least 6 characters long.',
			),
			'pattern' => array(
                'rule'     => '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,16}$/',
                'message'  => 'Le mot de passe doit contenir au moins une majuscule, une minuscule et un chiffre !',
                
            ),
		),
		'verify_password' => array(
			/*'rule' => 'validIdentical',
			'message' => 'Le mot de passe et la confirmation du mot de passe doivent être identiques !',*/
			'rule' => array('equaltofield','password'),
            'message' => 'Le mot de passe et la confirmation du mot de passe doivent être identiques !',
				
		),
		'name' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'This field cannot be left blank.',
				'last' => true,
			),
			'lastname-rule-2' => array(
                'rule'     => '/^[a-zA-Z\-\s]+$/',
                'message'  => 'Lettres uniquement !',
                
            ),
            'lastname-rule-3' => array(
                'rule'    => array('between', 2, 30),
                'message' => 'Nom entre 2 et 30 caractères',
                
            ),
		),
		'firstname' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'This field cannot be left blank.',
				'last' => true,
			),
			'firstname-rule-2' => array(
                'rule'     => '/^[a-zA-Z\-\s]+$/',
                'message'  => 'Lettres uniquement !',
                
            ),
	        'firstname-rule-3' => array(
                'rule'    => array('between', 2, 30),
                'message' => 'Prénom entre 2 et 30 caractères',
                
            ),
		),
		'website' => array(
			'url' => array(
				'rule' => 'url',
				'message' => 'This field must be a valid URL',
				'allowEmpty' => true,
			),
		),
		'street' => array(
        	'street-rule-1' => array(
	            'rule' => 'notEmpty',
	            'message' => 'Veuillez renseigner votre rue !',
	            
	        ),
            'street-rule-2' => array(
                'rule'     => '/^[a-zA-Z\-\s0-9\']+$/',
                'message'  => 'Chiffres et lettres uniquement !',
                
            ),
            'street-rule-3' => array(
                'rule'    => array('between', 3, 50),
                'message' => 'Rue entre 3 et 50 caractères',
                
        	),
     	),
        'zipcode' => array(
        	'zipcode-rule-1' => array(
	            'rule' => 'notEmpty',
	            'message' => 'Veuillez renseigner votre code postal !',
	            
	        ),
            'zipcode-rule-2' => array(
                'rule'     => '/^[0-9]{5}$/',
                'message'  => '5 Chiffres uniquement !',
                
            ),
     	),
    	'city' => array(
	    	'city-rule-1' => array(
	            'rule' => 'notEmpty',
	            'message' => 'Veuillez renseigner votre ville !',
	            
	        ),
	        'city-rule-2' => array(
                'rule'     => '/^[a-zA-Z\-\s]+$/',
                'message'  => 'Lettres uniquement !',
                
            ),
	        'city-rule-3' => array(
                'rule'    => array('between', 3, 30),
                'message' => 'Ville entre 3 et 30 caractères',
       		),
       	),
	);

/**
 * Filter search fields
 *
 * @var array
 * @access public
 */
	public $filterArgs = array(
		'name' => array('type' => 'like', 'field' => array('User.name', 'User.username')),
		'role_id' => array('type' => 'value'),
	);

/**
 * Display fields for this model
 *
 * @var array
 */
	protected $_displayFields = array(
		'id',
		'Role.title' => 'Role',
		'username',
		'name',
		'firstname',
		'status' => array('type' => 'boolean'),
		'email',
		/*'birthdate',
		'street',
		'zipcode',
		'city'*/
	);

/**
 * Edit fields for this model
 *
 * @var array
 */
	protected $_editFields = array(
		'role_id',
		'username',
		'name',
		'firstname',
		'email',
		'website',
		'status',
		'birthdate',
		'street',
		'zipcode',
		'city'
	);

/**
 * Constructor. Configures the order property.
 *
 * @param bool|int|string|array $id Set this ID for this model on startup,
 * can also be an array of options, see above.
 * @param string $table Name of database table to use.
 * @param string $ds DataSource connection name.
 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);

		$this->order = $this->alias . '.name ASC';
	}

/**
 * beforeDelete
 *
 * @param boolean $cascade
 * @return boolean
 */
	public function beforeDelete($cascade = true) {
		$this->Role->Behaviors->attach('Croogo.Aliasable');
		$adminRoleId = $this->Role->byAlias('admin');

		$current = AuthComponent::user();
		if (!empty($current['id']) && $current['id'] == $this->id) {
			return false;
		}
		if ($this->field('role_id') == $adminRoleId) {
			$count = $this->find('count', array(
				'conditions' => array(
					$this->escapeField() . ' <>' => $this->id,
					$this->escapeField('role_id') => $adminRoleId,
					$this->escapeField('status') => true,
				)
			));
			return ($count > 0);
		}
		return true;
	}

/**
 * beforeSave
 *
 * @param array $options
 * @return boolean
 */
	public function beforeSave($options = array()) {
		if (!empty($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		if (!empty($this->data[$this->alias]['email'])) {
			$this->data[$this->alias]['email'] = $this::lowerCase($this->data[$this->alias]['email']);
		}
		if (!empty($this->data[$this->alias]['name'])) {
			$this->data[$this->alias]['name'] = $this::titleCase($this->data[$this->alias]['name']);
		}
		if (!empty($this->data[$this->alias]['firstname'])) {
			$this->data[$this->alias]['firstname'] = $this::ucname($this->data[$this->alias]['firstname']);
		}
		if (!empty($this->data[$this->alias]['street'])) {
			$this->data[$this->alias]['street'] = $this::ucname($this->data[$this->alias]['street']);
		}
		if (!empty($this->data[$this->alias]['city'])) {
			$this->data[$this->alias]['city'] = $this::ucname($this->data[$this->alias]['city']);
		}
		return true;
	}

/**
 * _identical
 *
 * @param string $check
 * @return boolean
 * @deprecated Protected validation methods are no longer supported
 */
	protected function _identical($check) {
		return $this->validIdentical($check);
	}

/**
 * validIdentical
 *
 * @param string $check
 * @return boolean
 */
	public function validIdentical($check) {
		if (isset($this->data[$this->alias]['password'])) {
			if ($this->data[$this->alias]['password'] != $check['verify_password']) {
				return __d('croogo', 'Passwords do not match. Please, try again.');
			}
		}
		return true;
	}

	//Met une majuscule sur tous les caractères suivant un espace blanc ou un tiret dans la chaine
    public function ucname($string) {
        $string =ucwords(strtolower($string));

        foreach (array('-', '\'') as $delimiter) {
          if (strpos($string, $delimiter)!==false) {
            $string =implode($delimiter, array_map('ucfirst', explode($delimiter, $string)));
          }
        }
        return $string;
    }

    //Met une chaine en majuscule
    public function titleCase($string){
      return strtoupper($string);
    }

    //Met une chaine en minuscule
    public function lowerCase($string){
      return strtolower($string);
    }

    /*Fonction :	Compare 2 champs
	**Appel : 		'rule' => array('equaltofield','champAComparerAuChampActuel')
	**Retour : 		True si égaux, false si différents
	**Exemple :		Pour comparer une confirmation de password avec un password 
	**				'repassword' => array(
		        	    'rule' => array('equaltofield','password'),
	            		'message' => 'Le mot de passe et la confirmation du mot de passe doivent être identiques !',
						'on' => 'create', // Limit validation to 'create' or 'update' operations
	        		)
		*/
	public function equaltofield($check,$otherfield)
    {
        //get name of field
        $fname = '';
        foreach ($check as $key => $value){
            $fname = $key;
            break;
        }
        return $this->data[$this->name][$otherfield] === $this->data[$this->name][$fname];
    } 

}
