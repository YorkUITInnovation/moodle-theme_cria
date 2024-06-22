$(document).ready(function(){
    // Remove all links in the Site administration page
    $('[data-key="courses"]').hide();
    $('[data-key="grades"]').hide();
    $('[data-key="reports"]').hide();
    let wwwroot = M.cfg.wwwroot;
    let url = '';
    let element = '';
    $('a').each(function(){
        url = $(this).attr('href');

        switch (url) {
            case wwwroot + '/admin/category.php?category=analytics':
            case wwwroot + '/admin/category.php?category=competencies':
            case wwwroot + '/admin/category.php?category=badges':
            case wwwroot + '/admin/category.php?category=h5p':
            case wwwroot + '/admin/category.php?category=license':
            case wwwroot + '/admin/category.php?category=messaging':
            case wwwroot + '/admin/category.php?category=payment':
            case wwwroot + '/admin/category.php?category=moodlenet':
            case wwwroot + '/admin/category.php?category=modsettings':
            case wwwroot + '/admin/category.php?category=availabilitysettings':
            case wwwroot + '/admin/category.php?category=blocksettings':
            case wwwroot + '/admin/category.php?category=contentbanksettings':
            case wwwroot + '/admin/category.php?category=formatsettings':
            case wwwroot + '/admin/category.php?category=customfieldsettings':
            case wwwroot + '/admin/category.php?category=dataformatsettings':
            case wwwroot + '/admin/category.php?category=fileconverterplugins':
            case wwwroot + '/admin/category.php?category=enrolments':
            case wwwroot + '/admin/category.php?category=filtersettings':
            case wwwroot + '/admin/category.php?category=mlbackendsettings':
            case wwwroot + '/admin/category.php?category=mediaplayers':
            case wwwroot + '/admin/category.php?category=paymentgateways':
            case wwwroot + '/admin/category.php?category=qbanksettings':
            case wwwroot + '/admin/category.php?category=qbehavioursettings':
            case wwwroot + '/admin/category.php?category=qtypesettings':
            case wwwroot + '/admin/category.php?category=repositorysettings':
            case wwwroot + '/admin/category.php?category=experimental':
                element = $(this).parent().parent().parent();
                console.log(element);
                element.prev().filter("hr").remove();
                element.remove();
                break;
            case wwwroot + '/admin/tool/generator/maketestcourse.php':
            case wwwroot + '/admin/webservice/testclient.php':
            case wwwroot + '/admin/tool/templatelibrary/index.php':
            case wwwroot + '/admin/settings.php?section=logos':
            case wwwroot + '/admin/settings.php?section=navigation':
            case wwwroot + '/admin/settings.php?section=coursecolors':
            case wwwroot + '/admin/settings.php?section=ajax':
            case wwwroot + '/admin/settings.php?section=calendar':
            case wwwroot + '/admin/settings.php?section=blog':
            case wwwroot + '/admin/settings.php?section=documentation':
            case wwwroot + '/my/indexsys.php':
            case wwwroot + '/user/profilesys.php':
            case wwwroot + '/admin/settings.php?section=coursecontact':
            case wwwroot + '/admin/settings.php?section=templates':
            case wwwroot + '/admin/settings.php?section=themesettingboost':
            case wwwroot + '/admin/settings.php?section=themesettingclassic':
            case wwwroot + '/admin/settings.php?section=moodleservices':
            case wwwroot + '/admin/settings.php?section=userfeedback':
            case wwwroot + '/admin/settings.php?section=optionalsubsystems':
            case wwwroot + '/cohort/index.php':
            case wwwroot + '/admin/tool/cohortroles/index.php':
            case wwwroot + '/user/profile/index.php':
            case wwwroot + '/admin/index.php':
            case wwwroot + '/admin/registration/index.php':
            case wwwroot + '/admin/tool/admin_presets/index.php':
                element = $(this).parent();
                element.prev().filter("hr").remove();
                element.remove();
                element.remove();
        }

        switch (url) {
            case wwwroot . http://localhost/admin/tool/generator/maketestcourse.php
        }


    })
})