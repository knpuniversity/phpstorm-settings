# phpstorm-symfony2-template
Live template for Symfony 2 on Phpstorm

This is a [PhpStorm](www.jetbrains.com/phpstorm/) live template which includes handy snippets for doing [Symfony2](www.symfony.com) framework development.


Snippets are copied from [https://github.com/raulfraile/sublime-symfony2](https://github.com/raulfraile/sublime-symfony2) for sublime text.

## Installation ##

copy Symfony2.xml file into your live template config folder

Linux :

```
~/.WebIde80/config/templates/
```

Windows :
```
C:\Users\<username>\.WebIde80\config\templates
```


## Shortcuts from raulfraile, applied on Phpstorm by Pouzor ##

All shortcuts start with the `sf` prefix and are both short and intuitive:

### Controller ###

`sfcontroller`

``` php
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('.html.twig');
    }
}
```

`sfcontrollera`

``` php
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="")
     * @Template()
     */
    public function indexAction()
    {

    }
}
```

`sfaction`

``` php
public function indexAction()
{
    return $this->render('.html.twig');
}
```

`sfactiona`

``` php
/**
 * @Route("/", name="")
 * @Template()
 */
public function indexAction()
{

}
```

`sfem`

``` php
$em = $this->getDoctrine()->getManager();
```

`sfrepo`

``` php
$em->getRepository('Bundle:Repository');
```

`sfforward`

``` php
$this->forward('Bundle:Controller:action', array(), array());
```

`sfredirect`

``` php
$this->redirect($this->generateUrl('route', array()));
```

`sfrender`

``` php
$this->render('Bundle:Folder:template.html.twig', array());
```

`sfgetsession`

``` php
$this->getRequest()->getSession();
```

`sfsetflash`

``` php
$this->get('session')->getFlashBag()->add('type', 'message');
```

`sfdump`

``` php
\Doctrine\Common\Util\Debug::dump();
```

### Command ###

`sfcommand`

``` php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DefaultCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('default:command')
            ->setDescription('Default description')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }
}
```

`sfcommandca`

``` php
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DefaultCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('default:command')
            ->setDescription('Default description')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }
}
```

### Doctrine ###

#### Classes ####

`sfentityclass`

``` php
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="")
 * @ORM\Table(name="")
 */
class Entity
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}
```

`sfdocumentclass`

``` php
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @MongoDB\Document(collection="", repositoryClass="")
 */
class Document
{
    /**
     * @MongoDB\Id()
     */
    protected $id;
}
```

`sfrepository`

``` php
use Doctrine\ORM\EntityRepository;

class EntityNameRepository extends EntityRepository
{
}
```

`sfgetset`
Just type your variable name (firstName for instance), and the snippets will name the functions automatically (getFirstName).

``` php
/**
* Get 
* @return  
*/
public function get()
{
    return $this->;
}

/**
* Set 
* @return  
*/
public function set($)
{
    $this-> = $;
    return $this;
}
```

#### Annotations ####

After triggering the snippets, just type your var name and it will automatically set the name in the annotation (If you type 'firstName', your variable will be named 'firstName' and in the annotation the name will be 'first_name').

`sfentity`

``` php
/**
 * @ORM\Entity()
 * @ORM\Table(name="name")
 */
```

`sfidcolumn`

``` php
/**
 * @ORM\Column(name="id", type="integer", nullable=false)
 * @ORM\Id()
 * @ORM\GeneratedValue(strategy="IDENTITY")
 */
 private $id;
```

`sfstringcolumn`

``` php
/**
 * @ORM\Column(name="", type="string", length=255)
 */
 private $;
```

`sfdecimalcolumn`

``` php
/**
 * @ORM\Column(name="", type="decimal", scale=2)
 */
 private $;
```

`sftextcolumn`

``` php
/**
 * @ORM\Column(name="", type="text")
 */
 private $;
```

`sfintegercolumn`

``` php
/**
 * @ORM\Column(name="", type="integer")
 */
 private $;
```

`sfbooleancolumn`

``` php
/**
 * @ORM\Column(name="", type="boolean")
 */
 private $;
```

`sfsmallintcolumn`

``` php
/**
 * @ORM\Column(name="", type="smallint")
 */
 private $;
```

`sfbigintcolumn`

``` php
/**
 * @ORM\Column(name="", type="bigint")
 */
 private $;
```

`sfdatetimecolumn`

``` php
/**
 * @ORM\Column(name="", type="datetime")
 */
 private $;
```

`sfdatecolumn`

``` php
/**
 * @ORM\Column(name="", type="date")
 */
 private $;
```

`sftimecolumn`

``` php
/**
 * @ORM\Column(name="", type="time")
 */
 private $;
```

`sffloatcolumn`

``` php
/**
 * @ORM\Column(name="", type="float")
 */
 private $;
```

`sfarraycolumn`

``` php
/**
 * @ORM\Column(name="", type="array")
 */
 private $;
```

`sfobjectcolumn`

``` php
/**
 * @ORM\Column(name="", type="object")
 */
 private $;
```

### Forms ###

`sfform`

``` php
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NameType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => '',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'name';
    }
}
```

`sfdatatransformer`

``` php
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\UnexpectedTypeException;
use Symfony\Component\Form\Exception\TransformationFailedException;

class NameTransformer implements DataTransformerInterface
{
    /**
     * {@inheritdoc}
     */
    public function transform($value)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform($value)
    {

    }
}
```

### Twig ###

`sftwigextension`

``` php
class NameExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array();
    }

    /**
     * {@inheritdoc}
     */
    public function getTests()
    {
        return array();
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array();
    }
}
```

`sftwigform`

``` jinja
<form class="" action="{{ path('') }}" method="post" {{ form_enctype(form) }}>
    {{ form_errors(form) }}
    {{ form_widget(form) }}
    <input type="submit" value="Submit" />
</form>
```

`sftwigrow`

``` jinja
{{ form_row(form.) }}
```

`trans`

``` jinja
{% trans %}{% endtrans %}
```

### Template ###

`sfasset`

``` jinja
{{ asset('bundles/')}}
```

`sfasseticjs`

``` jinja
{% javascripts '@/Resources/public/js/*' %}
    <script type="text/javascript" src="{{ asset_url }}"></script>
{% endjavascripts %}
```

`sfasseticcss`

``` jinja
{% stylesheets 'bundles//css/*' filter='cssrewrite' %}
    <link rel="stylesheet" href="{{ asset_url }}" />
{% endstylesheets %}
```

### Validation ###

`sfconstraint`

``` php
use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class NameConstraint extends Constraint
{
    public $message = '';
}
```

`sfconstraintvalidator`

``` php
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class NameValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {

    }
}
```

### DependencyInjection ###

`sfdiconfiguration`

``` php
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('bundle_name');

        $rootNode
            ->children()
                ->scalarNode('enabled')
                    ->setInfo('Enable the container extension')
                    ->setDefault(true)
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
```

`sfdiextension`

``` php
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class BundleExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $config = $this->processConfiguration(new Configuration(), $configs);
        if (false === $config['enabled']) {
            return;
        }

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
    }
}
```

`sfdiservices`

``` xml
<?xml version="1.0" ?>

<container xmlns="http://symfony.com/schema/dic/services"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd">

    <services>
        <service id="id" class="class" />
    </services>
</container>
```

### YAML ###

 `sfroute`

``` yaml
route_name:
    path:   /
    defaults:  { _controller: Bundle:Controller:action }
```


### Contributors list (from sublime repo) ###
* Rémy Jardinet [github](http://github.com/pouzor) | [twitter](http://twitter.com/Pouz0r)
* Raúl Fraile: [github](http://github.com/raulfraile) | [twitter](http://twitter.com/raulfraile)
* Pierre-Yves LEBECQ: [github](http://github.com/pylebecq) | [twitter](http://twitter.com/pylebecq)
* Willemsen Christophe: [github](http://github.com/kwattro) | [twitter](http://twitter.com/kwattroweb)
* Alexandre Salomé: [github](http://github.com/alexandresalome)
* Purple Babar: [github](https://github.com/PurpleBabar)

