<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    function h_metatags_add()                  { do_action( 'h_metatags_add' );               }
    function h_linktags_add()                  { do_action( 'h_linktags_add' );               }
    function h_body_begin()                    { do_action( 'h_body_begin' );                 }
    function h_body_liner_begin()              { do_action( 'h_body_liner_begin' );           }
    function h_body_header()                   { do_action( 'h_body_header' );                }
    function h_main_begin()                    { do_action( 'h_main_begin' );                 }



    function h_template_404_before()           { do_action( 'h_template_404_before' );        }
    function h_template_404()                  { do_action( 'h_template_404' );               }
    function h_template_404_after()            { do_action( 'h_template_404_after' );         }

    function h_template_archive_before()       { do_action( 'h_template_archive_before' );    }
    function h_template_archive_begin()        { do_action( 'h_template_archive_begin' );     }
//  function h_template_archive()              { do_action( 'h_template_archive' );           }
    function h_template_archive_end()          { do_action( 'h_template_archive_end' );       }
    function h_template_archive_after()        { do_action( 'h_template_archive_after' );     }

    function h_template_attachment_before()    { do_action( 'h_template_attachment_before' ); }
    function h_template_attachment_begin()     { do_action( 'h_template_attachment_begin' );  }
//  function h_template_attachment()           { do_action( 'h_template_attachment' );        }
    function h_template_attachment_end()       { do_action( 'h_template_attachment_end' );    }
    function h_template_attachment_after()     { do_action( 'h_template_attachment_after' );  }

    function h_template_author_before()        { do_action( 'h_template_author_before' );     }
    function h_template_author_begin()         { do_action( 'h_template_author_begin' );      }
//  function h_template_author()               { do_action( 'h_template_author' );            }
    function h_template_author_end()           { do_action( 'h_template_author_end' );        }
    function h_template_author_after()         { do_action( 'h_template_author_after' );      }

    function h_template_category_before()      { do_action( 'h_template_category_before' );   }
    function h_template_category_begin()       { do_action( 'h_template_category_begin' );    }
//  function h_template_category()             { do_action( 'h_template_category' );          }
    function h_template_category_end()         { do_action( 'h_template_category_end' );      }
    function h_template_category_after()       { do_action( 'h_template_category_after' );    }

    function h_template_date_before()          { do_action( 'h_template_date_before' );       }
    function h_template_date_begin()           { do_action( 'h_template_date_begin' );        }
//  function h_template_date()                 { do_action( 'h_template_date' );              }
    function h_template_date_end()             { do_action( 'h_template_date_end' );          }
    function h_template_date_after()           { do_action( 'h_template_date_after' );        }

    function h_template_front_page_before()    { do_action( 'h_template_front_page_before' ); }
    function h_template_front_page()           { do_action( 'h_template_front_page' );        }
    function h_template_front_page_after()     { do_action( 'h_template_front_page_after' );  }

    function h_template_home_before()          { do_action( 'h_template_home_before' );       }
    function h_template_home_begin()           { do_action( 'h_template_home_begin' );        }
//  function h_template_home()                 { do_action( 'h_template_home' );              }
    function h_template_home_end()             { do_action( 'h_template_home_end' );          }
    function h_template_home_after()           { do_action( 'h_template_home_after' );        }

    function h_template_image_before()         { do_action( 'h_template_image_before' );      }
    function h_template_image_begin()          { do_action( 'h_template_image_begin' );       }
//  function h_template_image()                { do_action( 'h_template_image' );             }
    function h_template_image_end()            { do_action( 'h_template_image_end' );         }
    function h_template_image_after()          { do_action( 'h_template_image_after' );       }

    function h_template_index_before()         { do_action( 'h_template_index_before' );      }
    function h_template_index_begin()          { do_action( 'h_template_index_begin' );       }
//  function h_template_index()                { do_action( 'h_template_index' );             }
    function h_template_index_end()            { do_action( 'h_template_index_end' );         }
    function h_template_index_after()          { do_action( 'h_template_index_after' );       }

    function h_template_page_before()          { do_action( 'h_template_page_before' );       }
    function h_template_page_begin()           { do_action( 'h_template_page_begin' );        }
//  function h_template_page()                 { do_action( 'h_template_page' );              }
    function h_template_page_end()             { do_action( 'h_template_page_end' );          }
    function h_template_page_after()           { do_action( 'h_template_page_after' );        }

    function h_template_search_before()        { do_action( 'h_template_search_before' );     }
    function h_template_search_begin()         { do_action( 'h_template_search_begin' );      }
//  function h_template_search()               { do_action( 'h_template_search' );            }
    function h_template_search_end()           { do_action( 'h_template_search_end' );        }
    function h_template_search_after()         { do_action( 'h_template_search_after' );      }

    function h_template_single_before()        { do_action( 'h_template_single_before' );     }
    function h_template_single_begin()         { do_action( 'h_template_single_begin' );      }
//  function h_template_single()               { do_action( 'h_template_single' );            }
    function h_template_single_end()           { do_action( 'h_template_single_end' );        }
    function h_template_single_after()         { do_action( 'h_template_single_after' );      }

    function h_template_tag_before()           { do_action( 'h_template_tag_before' );        }
    function h_template_tag_begin()            { do_action( 'h_template_tag_begin' );         }
//  function h_template_tag()                  { do_action( 'h_template_tag' );               }
    function h_template_tag_end()              { do_action( 'h_template_tag_end' );           }
    function h_template_tag_after()            { do_action( 'h_template_tag_after' );         }

    function h_template_taxonomy_before()      { do_action( 'h_template_taxonomy_before' );   }
    function h_template_taxonomy_begin()       { do_action( 'h_template_taxonomy_begin' );    }
//  function h_template_taxonomy()             { do_action( 'h_template_taxonomy' );          }
    function h_template_taxonomy_end()         { do_action( 'h_template_taxonomy_end' );      }
    function h_template_taxonomy_after()       { do_action( 'h_template_taxonomy_after' );    }



    function h_main_end()                      { do_action( 'h_main_end' );                   }
    function h_body_footer()                   { do_action( 'h_body_footer' );                }
    function h_body_liner_end()                { do_action( 'h_body_liner_end' );             }
    function h_body_end()                      { do_action( 'h_body_end' );                   }
