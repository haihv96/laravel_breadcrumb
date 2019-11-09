<?

namespace PhpMod\LaravelBreadCrumb;

class BreadcrumbList
{
    public $breadcrumbs = [];

    public function push($name, $url = null, $active = false)
    {
        $additionBreadCrumb = new BreadcrumbObject($name, $url, $active);
        if ($additionBreadCrumb->isActive()) {
            $this->breadcrumbs = collect($this->breadcrumbs)->map(function (BreadcrumbObject $breadcrumb) {
                $breadcrumb->setInactive();
                return $breadcrumb;
            })->toArray();
        }
        $this->breadcrumbs[] = $additionBreadCrumb;
    }

    public function all()
    {
        return $this->breadcrumbs;
    }
}
