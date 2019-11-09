<?

namespace PhpMod\LaravelBreadCrumb;

class BreadcrumbObject
{
    public $name;
    public $url;
    public $active;

    public function __construct($name, $url = null, $active = false)
    {
        $this->name = $name;
        $this->url = $url;
        $this->active = $active;
    }

    public function hasUrl()
    {
        return !empty($this->url);
    }

    public function setInactive()
    {
        return $this->active = false;
    }

    public function isActive()
    {
        return $this->active;
    }
}
