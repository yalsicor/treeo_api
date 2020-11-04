define({ "api": [
  {
    "group": "Debug",
    "name": "createDebug",
    "type": "POST",
    "url": "/v1/debugs",
    "title": "Save debug data",
    "description": "<p>Save debug data.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Farmer"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "timestamp",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Debug/UI/API/Routes/CreateDebug.v1.private.php",
    "groupTitle": "Debug"
  },
  {
    "group": "Debug",
    "name": "deleteDebug",
    "type": "DELETE",
    "url": "/v1/debug",
    "title": "Delete debug data",
    "description": "<p>Delete debug data.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Admin"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Debug/UI/API/Routes/DeleteDebug.v1.private.php",
    "groupTitle": "Debug"
  },
  {
    "group": "Debug",
    "name": "findDebugById",
    "type": "GET",
    "url": "/v1/debug",
    "title": "Find debug data by id",
    "description": "<p>Find debug data by id.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Admin"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Debug/UI/API/Routes/FindDebugById.v1.private.php",
    "groupTitle": "Debug"
  },
  {
    "group": "Debug",
    "name": "getAllDebugs",
    "type": "GET",
    "url": "/v1/debugs",
    "title": "Get all debug data",
    "description": "<p>Get all debug data.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Admin"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Debug/UI/API/Routes/GetAllDebugs.v1.private.php",
    "groupTitle": "Debug"
  },
  {
    "group": "District",
    "name": "createDistrict",
    "type": "POST",
    "url": "/v1/district",
    "title": "Create District",
    "description": "<p>Create District.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/District/UI/API/Routes/CreateDistrict.v1.private.php",
    "groupTitle": "District",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "District",
    "name": "deleteDistrict",
    "type": "DELETE",
    "url": "/v1/district",
    "title": "Delete district",
    "description": "<p>Delete district.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/District/UI/API/Routes/DeleteDistrict.v1.private.php",
    "groupTitle": "District"
  },
  {
    "group": "District",
    "name": "findDistrictById",
    "type": "GET",
    "url": "/v1/district",
    "title": "Find district",
    "description": "<p>Find district by id.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/District/UI/API/Routes/FindDistrictById.v1.private.php",
    "groupTitle": "District",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "District",
    "name": "getAllDistricts",
    "type": "GET",
    "url": "/v1/districts",
    "title": "Get all districts",
    "description": "<p>Get all districts.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager, Farmer"
      }
    ],
    "filename": "app/Containers/District/UI/API/Routes/GetAllDistricts.v1.private.php",
    "groupTitle": "District",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "District",
    "name": "updateDistrict",
    "type": "PATCH",
    "url": "/v1/district",
    "title": "Update district",
    "description": "<p>Update district.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/District/UI/API/Routes/UpdateDistrict.v1.private.php",
    "groupTitle": "District",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Farmer",
    "name": "changeFarmerProfilePhoto",
    "type": "POST",
    "url": "/v1/farmer/photo",
    "title": "Change farmer photo",
    "description": "<p>Change farmer photo.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Farmer"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "File",
            "optional": false,
            "field": "photo",
            "description": "<p>image file (is deleted if null)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "farmer_id",
            "description": "<p>farmer identifier (optional)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n        \"object\": \"Media\",\n        \"id\": \"v9zdex5mn3kmgyap\",\n        \"title\": \"Spokk\",\n        \"file\": \"hWResLMpBsjTLYf3cfcFRR3MAPzkQzArtOBzwquN.jpeg\",\n        \"ext\": \"jpeg\",\n        \"description\": null,\n        \"alt\": null,\n        \"filename\": \"DSC_6555.jpg\",\n        \"created_at\": \"2019-02-21T18:16:29+00:00\",\n        \"updated_at\": \"2019-02-21T18:16:29+00:00\"\n    },\n    \"meta\": {\n        \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Farmer/UI/API/Routes/ChangeFarmerProfilePhoto.v1.private.php",
    "groupTitle": "Farmer"
  },
  {
    "group": "Farmer",
    "name": "createFarmer",
    "type": "POST",
    "url": "/v1/farmer",
    "title": "Create farmer",
    "description": "<p>Create a new farmer.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "story",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "project_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Numeric",
            "optional": false,
            "field": "children",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Date",
            "optional": false,
            "field": "birthday",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "File",
            "optional": false,
            "field": "photo",
            "description": "<p>image file</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "main_occupation",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "side_occupation",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "spouse_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Date",
            "optional": false,
            "field": "Spouse_birthday",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "spouse_main_occupation",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "spouse_side_occupation",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Numeric",
            "optional": false,
            "field": "family_income_idr",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "address",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "gender_id",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Farmer/UI/API/Routes/CreateFarmer.v1.private.php",
    "groupTitle": "Farmer",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Farmer\",\n            \"id\": \"qnwmkv5704blag6r\",\n            \"identifier\": \"gv7t\",\n            \"name\": \"admin\",\n            \"story\": \"my story\",\n            \"children\": 0,\n            \"birthday\": {\n            \"date\": \"1980-08-25 00:00:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"main_occupation\": \"something\",\n            \"side_occupation\": \"something else\",\n            \"spouse_name\": \"no idea\",\n            \"spouse_birthday\": {\n            \"date\": \"1980-08-25 00:00:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"spouse_main_occupation\": \"something\",\n            \"spouse_side_occupation\": \"something else\",\n            \"family_income_idr\": 20000,\n            \"address\": \"somewhere\",\n            \"user_id\": \"qnwmkv5704blag6r\",\n            \"photo_id\": null,\n            \"project_id\": \"qnwmkv5704blag6r\",\n            \"gender\": \"male\",\n            \"gender_id\": \"qmv7dk48x5b690wx\",\n            \"created_at\": {\n            \"date\": \"2018-12-19 13:45:18.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-12-19 13:45:18.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            }\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Farmer",
    "name": "deleteFarmer",
    "type": "DELETE",
    "url": "/v1/farmer",
    "title": "Delete farmer",
    "description": "<p>Delete a farmer.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Farmer/UI/API/Routes/DeleteFarmer.v1.private.php",
    "groupTitle": "Farmer"
  },
  {
    "group": "Farmer",
    "name": "findFarmerById",
    "type": "GET",
    "url": "/v1/farmer",
    "title": "Get Farmer",
    "description": "<p>Get single farmer by id</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Farmer/UI/API/Routes/FindFarmerById.v1.private.php",
    "groupTitle": "Farmer",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Farmer\",\n            \"id\": \"qnwmkv5704blag6r\",\n            \"identifier\": \"gv7t\",\n            \"name\": \"admin\",\n            \"story\": \"my story\",\n            \"children\": 0,\n            \"birthday\": {\n            \"date\": \"1980-08-25 00:00:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"main_occupation\": \"something\",\n            \"side_occupation\": \"something else\",\n            \"spouse_name\": \"no idea\",\n            \"spouse_birthday\": {\n            \"date\": \"1980-08-25 00:00:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"spouse_main_occupation\": \"something\",\n            \"spouse_side_occupation\": \"something else\",\n            \"family_income_idr\": 20000,\n            \"address\": \"somewhere\",\n            \"user_id\": \"qnwmkv5704blag6r\",\n            \"photo_id\": null,\n            \"project_id\": \"qnwmkv5704blag6r\",\n            \"gender\": \"male\",\n            \"gender_id\": \"qmv7dk48x5b690wx\",\n            \"created_at\": {\n            \"date\": \"2018-12-19 13:45:18.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-12-19 13:45:18.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            }\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Farmer",
    "name": "findFarmerByIdExtended",
    "type": "GET",
    "url": "/v1/farmer/datatable",
    "title": "Find farmer with extended dataset",
    "description": "<p>Find farmer with extended dataset.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Farmer/UI/API/Routes/findFarmerByIdExtended.v1.private.php",
    "groupTitle": "Farmer",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Farmer\",\n            \"id\": \"lnmojg5bv4ew80ra\",\n            \"user_id\": null,\n            \"photo_id\": null,\n            \"project_id\": \"qnwmkv5704blag6r\",\n            \"gender_id\": null,\n            \"name\": \"jonedi1\",\n            \"identifier\": \"j0vi\",\n            \"story\": null,\n            \"children\": null,\n            \"birthday\": null,\n            \"photo\": null,\n            \"main_occupation\": null,\n            \"side_occupation\": null,\n            \"spouse_name\": null,\n            \"spouse_birthday\": null,\n            \"spouse_main_occupation\": null,\n            \"spouse_side_occupation\": null,\n            \"family_income_idr\": null,\n            \"address\": null,\n            \"import_id\": 29,\n            \"project\": \"1mt\",\n            \"created_at\": {\n            \"date\": \"2018-12-19 14:17:44.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-12-19 14:17:44.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"gender\": null,\n            \"email\": null\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Farmer",
    "name": "getAllFarmerCsv",
    "type": "GET",
    "url": "/v1/farmers/csv",
    "title": "Get all farmer as csv file",
    "description": "<p>Get all farmer as csv file. <strong>Extended filters can be applied.</strong></p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Farmer/UI/API/Routes/GetAllFarmerCsv.v1.private.php",
    "groupTitle": "Farmer"
  },
  {
    "group": "Farmer",
    "name": "getAllFarmers",
    "type": "GET",
    "url": "/v1/farmers",
    "title": "Get Farmers",
    "description": "<p>Get all farmers.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "filename": "app/Containers/Farmer/UI/API/Routes/GetAllFarmers.v1.private.php",
    "groupTitle": "Farmer",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Farmer\",\n            \"id\": \"qnwmkv5704blag6r\",\n            \"identifier\": \"gv7t\",\n            \"name\": \"admin\",\n            \"story\": \"my story\",\n            \"children\": 0,\n            \"birthday\": {\n            \"date\": \"1980-08-25 00:00:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"main_occupation\": \"something\",\n            \"side_occupation\": \"something else\",\n            \"spouse_name\": \"no idea\",\n            \"spouse_birthday\": {\n            \"date\": \"1980-08-25 00:00:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"spouse_main_occupation\": \"something\",\n            \"spouse_side_occupation\": \"something else\",\n            \"family_income_idr\": 20000,\n            \"address\": \"somewhere\",\n            \"user_id\": \"qnwmkv5704blag6r\",\n            \"photo_id\": null,\n            \"project_id\": \"qnwmkv5704blag6r\",\n            \"gender\": \"male\",\n            \"gender_id\": \"qmv7dk48x5b690wx\",\n            \"created_at\": {\n            \"date\": \"2018-12-19 13:45:18.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-12-19 13:45:18.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            }\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Farmer",
    "name": "getFarmerView",
    "type": "GET",
    "url": "/v1/farmers/datatable",
    "title": "Get farmers as filterable objects",
    "description": "<p>Get farmers as filterable objects. <strong>Extended filters can be applied.</strong></p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "filename": "app/Containers/Farmer/UI/API/Routes/GetFarmerView.v1.private.php",
    "groupTitle": "Farmer",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Farmer\",\n            \"id\": \"lnmojg5bv4ew80ra\",\n            \"user_id\": null,\n            \"photo_id\": null,\n            \"project_id\": \"qnwmkv5704blag6r\",\n            \"gender_id\": null,\n            \"name\": \"jonedi1\",\n            \"identifier\": \"j0vi\",\n            \"story\": null,\n            \"children\": null,\n            \"birthday\": null,\n            \"photo\": null,\n            \"main_occupation\": null,\n            \"side_occupation\": null,\n            \"spouse_name\": null,\n            \"spouse_birthday\": null,\n            \"spouse_main_occupation\": null,\n            \"spouse_side_occupation\": null,\n            \"family_income_idr\": null,\n            \"address\": null,\n            \"import_id\": 29,\n            \"project\": \"1mt\",\n            \"created_at\": {\n            \"date\": \"2018-12-19 14:17:44.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-12-19 14:17:44.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"gender\": null,\n            \"email\": null\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Farmer",
    "name": "getGender",
    "type": "GET",
    "url": "/v1/genders",
    "title": "Get Genders",
    "description": "<p>Get a list of all genders</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager, Farmer"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Gender\",\n            \"id\": \"qnwmkv5704blag6r\",\n            \"name\": \"female\"\n        },\n        {\n            \"object\": \"Gender\",\n            \"id\": \"qmv7dk48x5b690wx\",\n            \"name\": \"male\"\n        }\n    ],\n    \"meta\": {\n    \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Farmer/UI/API/Routes/GetAllGenders.v1.private.php",
    "groupTitle": "Farmer"
  },
  {
    "group": "Farmer",
    "name": "getProfile",
    "type": "GET",
    "url": "/v1/farmer/profile",
    "title": "Get farmer profile",
    "description": "<p>Get farmer profile. Must be logged in as farmer.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager or Authenticated User"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n\"data\": {\n    \"object\": \"Farmer\",\n        \"id\": \"dqb9073ap3ekzgrm\",\n        \"identifier\": \"o1ep\",\n        \"name\": \"GHjj HKhk\",\n        \"story\": \"my story\",\n        \"children\": 0,\n        \"birthday\": {\n        \"date\": \"1980-08-25 00:00:00.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"main_occupation\": \"something\",\n        \"side_occupation\": \"something else\",\n        \"spouse_name\": \"no idea\",\n        \"spouse_birthday\": {\n        \"date\": \"1980-08-25 00:00:00.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"spouse_main_occupation\": \"something\",\n        \"spouse_side_occupation\": \"something else\",\n        \"family_income_idr\": 20000,\n        \"address\": \"somewhere\",\n        \"user_id\": \"dqb9073ap3ekzgrm\",\n        \"photo\": null,\n        \"project_id\": \"qnwmkv5704blag6r\",\n        \"project\": \"1mt\",\n        \"gender\": \"male\",\n        \"gender_id\": \"qmv7dk48x5b690wx\",\n        \"created_at\": {\n        \"date\": \"2018-12-06 14:28:54.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"updated_at\": {\n        \"date\": \"2018-12-06 14:28:54.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        }\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Farmer/UI/API/Routes/GetProfile.v1.private.php",
    "groupTitle": "Farmer"
  },
  {
    "group": "Farmer",
    "name": "registerFarmer",
    "type": "POST",
    "url": "/v1/farmer/register",
    "title": "Register a farmer as user",
    "description": "<p>Register a farmer as user.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Farmer/UI/API/Routes/RegisterFarmer.v1.private.php",
    "groupTitle": "Farmer"
  },
  {
    "group": "Farmer",
    "name": "updateFarmer",
    "type": "PATCH",
    "url": "/v1/farmer",
    "title": "Update Farmer",
    "description": "<p>Update farmer.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "story",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "project_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Numeric",
            "optional": false,
            "field": "children",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Date",
            "optional": false,
            "field": "birthday",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "File",
            "optional": false,
            "field": "photo",
            "description": "<p>image file</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "main_occupation",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "side_occupation",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "spouse_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Date",
            "optional": false,
            "field": "Spouse_birthday",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "spouse_main_occupation",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "spouse_side_occupation",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Numeric",
            "optional": false,
            "field": "family_income_idr",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "address",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "gender_id",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Farmer/UI/API/Routes/UpdateFarmer.v1.private.php",
    "groupTitle": "Farmer",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Farmer\",\n            \"id\": \"qnwmkv5704blag6r\",\n            \"identifier\": \"gv7t\",\n            \"name\": \"admin\",\n            \"story\": \"my story\",\n            \"children\": 0,\n            \"birthday\": {\n            \"date\": \"1980-08-25 00:00:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"main_occupation\": \"something\",\n            \"side_occupation\": \"something else\",\n            \"spouse_name\": \"no idea\",\n            \"spouse_birthday\": {\n            \"date\": \"1980-08-25 00:00:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"spouse_main_occupation\": \"something\",\n            \"spouse_side_occupation\": \"something else\",\n            \"family_income_idr\": 20000,\n            \"address\": \"somewhere\",\n            \"user_id\": \"qnwmkv5704blag6r\",\n            \"photo_id\": null,\n            \"project_id\": \"qnwmkv5704blag6r\",\n            \"gender\": \"male\",\n            \"gender_id\": \"qmv7dk48x5b690wx\",\n            \"created_at\": {\n            \"date\": \"2018-12-19 13:45:18.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-12-19 13:45:18.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            }\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "FieldCoordinator",
    "name": "createFieldCoordinator",
    "type": "POST",
    "url": "/v1/fieldcoordinator",
    "title": "Create field coordinator",
    "description": "<p>Create field coordinator.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required|min:3|max:191</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/FieldCoordinator/UI/API/Routes/CreateFieldCoordinator.v1.private.php",
    "groupTitle": "FieldCoordinator",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "FieldCoordinator",
    "name": "deleteFieldCoordinator",
    "type": "DELETE",
    "url": "/v1/fieldcoordinators",
    "title": "Delete field coordinator",
    "description": "<p>Delete field coordinator.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/FieldCoordinator/UI/API/Routes/DeleteFieldCoordinator.v1.private.php",
    "groupTitle": "FieldCoordinator"
  },
  {
    "group": "FieldCoordinator",
    "name": "findFieldCoordinatorById",
    "type": "GET",
    "url": "/v1/fieldcoordinator",
    "title": "Find field coordinator",
    "description": "<p>Find field coordinator.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/FieldCoordinator/UI/API/Routes/FindFieldCoordinatorById.v1.private.php",
    "groupTitle": "FieldCoordinator",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "FieldCoordinator",
    "name": "getAllFieldCoordinators",
    "type": "GET",
    "url": "/v1/fieldcoordinators",
    "title": "Get all field coordinators",
    "description": "<p>Get all field coordinators.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "filename": "app/Containers/FieldCoordinator/UI/API/Routes/GetAllFieldCoordinators.v1.private.php",
    "groupTitle": "FieldCoordinator",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "FieldCoordinator",
    "name": "updateFieldCoordinator",
    "type": "PATCH",
    "url": "/v1/fieldcoordinator",
    "title": "Update field coordinator",
    "description": "<p>Update field coordinator.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required|min:3|max:191</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/FieldCoordinator/UI/API/Routes/UpdateFieldCoordinator.v1.private.php",
    "groupTitle": "FieldCoordinator",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Geo",
    "name": "parseGeoJson",
    "type": "POST",
    "url": "/v1/geojson/parse",
    "title": "Parse geojson",
    "description": "<p>Parse geojson.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "File",
            "optional": false,
            "field": "geojson",
            "description": "<p>geojson file</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"geodata\": {\n        \"type\": \"FeatureCollection\",\n        \"features\": [\n            {\n                \"type\": \"Feature\",\n                \"geometry\": {\n                    \"type\": \"Point\",\n                    \"coordinates\": [\n                        13.790347652740206,\n                        51.081516396453026\n                    ]\n                }\n            },\n            {\n                \"type\": \"Feature\",\n                \"geometry\": {\n                    \"type\": \"MultiPolygon\",\n                    \"coordinates\": [\n                        [\n                            [\n                                [\n                                    13.789419416468263,\n                                    51.0816875011824\n                                ],\n                                [\n                                    13.78947263743495,\n                                    51.08178780318552\n                                ],\n                                [\n                                    13.789712131785045,\n                                    51.08183795410554\n                                ],\n                                [\n                                    13.790031457585176,\n                                    51.081821237138236\n                                ],\n                                [\n                                    13.790430614835334,\n                                    51.08175436920865\n                                ],\n                                [\n                                    13.790829772085496,\n                                    51.081854671066786\n                                ],\n                                [\n                                    13.79144181320241,\n                                    51.0818045201649\n                                ],\n                                [\n                                    13.791601476102473,\n                                    51.0816206330595\n                                ],\n                                [\n                                    13.791601476102473,\n                                    51.08135315960139\n                                ],\n                                [\n                                    13.791415202719064,\n                                    51.08115255349295\n                                ],\n                                [\n                                    13.791042655952248,\n                                    51.08113583627799\n                                ],\n                                [\n                                    13.790643498702089,\n                                    51.08126957382859\n                                ],\n                                [\n                                    13.79019112048524,\n                                    51.08120270510161\n                                ],\n                                [\n                                    13.7899250156518,\n                                    51.081169270701885\n                                ],\n                                [\n                                    13.78947263743495,\n                                    51.08121942229242\n                                ],\n                                [\n                                    13.789259753568198,\n                                    51.0814200281109\n                                ],\n                                [\n                                    13.789419416468263,\n                                    51.0816875011824\n                                ]\n                            ]\n                        ]\n                    ]\n                }\n            }\n        ]\n    },\n    \"properties\": {\n        \"id\": 1,\n        \"nichts\": \"2\"\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Geo/UI/API/Routes/ParseGeoJson.v1.private.php",
    "groupTitle": "Geo"
  },
  {
    "group": "Hotspot",
    "name": "changeHotspotPhoto",
    "type": "POST",
    "url": "/v1/hotspot/photo",
    "title": "Change Hotspot photo",
    "description": "<p>Change Hotspot photo.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "File",
            "optional": false,
            "field": "photo",
            "description": "<p>image file (leave empty to delete)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"object\": \"Media\",\n        \"id\": \"v9zdex5mn3kmgyap\",\n        \"title\": \"Spokk\",\n        \"file\": \"hWResLMpBsjTLYf3cfcFRR3MAPzkQzArtOBzwquN.jpeg\",\n        \"ext\": \"jpeg\",\n        \"description\": null,\n        \"alt\": null,\n        \"filename\": \"DSC_6555.jpg\",\n        \"created_at\": \"2019-02-21T18:16:29+00:00\",\n        \"updated_at\": \"2019-02-21T18:16:29+00:00\"\n    },\n    \"meta\": {\n    \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Hotspot/UI/API/Routes/ChangeHotspotPhoto.v1.private.php",
    "groupTitle": "Hotspot"
  },
  {
    "group": "Hotspot",
    "name": "createHotspot",
    "type": "POST",
    "url": "/v1/hotspot",
    "title": "Create hotspot",
    "description": "<p>Create hotspot.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "File",
            "optional": false,
            "field": "photo",
            "description": "<p>image</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "geo_data",
            "description": "<p>geojson</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "description",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name_de",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name_en",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name_ms",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "link_de",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "link_en",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "link_ms",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Hotspot/UI/API/Routes/CreateHotspot.v1.private.php",
    "groupTitle": "Hotspot",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": []\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Hotspot",
    "name": "deleteHotspot",
    "type": "DELETE",
    "url": "/v1/hotspot",
    "title": "Delete hotspot",
    "description": "<p>Delete hotspot.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Hotspot/UI/API/Routes/DeleteHotspot.v1.private.php",
    "groupTitle": "Hotspot"
  },
  {
    "group": "Hotspot",
    "name": "findHotspotById",
    "type": "GET",
    "url": "/v1/hotspot",
    "title": "Find hotspot",
    "description": "<p>Find hotspot.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Hotspot/UI/API/Routes/FindHotspotById.v1.private.php",
    "groupTitle": "Hotspot",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": []\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Hotspot",
    "name": "getAllHotspots",
    "type": "GET",
    "url": "/v1/hotspots",
    "title": "Get all hotspots",
    "description": "<p>Get all hotspots.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "filename": "app/Containers/Hotspot/UI/API/Routes/GetAllHotspots.v1.private.php",
    "groupTitle": "Hotspot",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": []\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Hotspot",
    "name": "getHotspotsForWebmap",
    "type": "GET",
    "url": "/v1/webmap/hotspots",
    "title": "(P) Get hotspots for webmap",
    "description": "<p>Get hotspots for webmap.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Hotspot/UI/API/Routes/GetHotspotsForWebmap.v1.public.php",
    "groupTitle": "Hotspot"
  },
  {
    "group": "Hotspot",
    "name": "updateHotspot",
    "type": "PATCH",
    "url": "/v1/hotspot",
    "title": "Update hotspot",
    "description": "<p>Update hotspot.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "File",
            "optional": false,
            "field": "photo",
            "description": "<p>image</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "geo_data",
            "description": "<p>geojson</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "description",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name_de",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name_en",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name_ms",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "link_de",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "link_en",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "link_ms",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Hotspot/UI/API/Routes/UpdateHotspot.v1.private.php",
    "groupTitle": "Hotspot",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": []\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "LegalStatus",
    "name": "createLegalStatus",
    "type": "POST",
    "url": "/v1/legal_status",
    "title": "Create legal status",
    "description": "<p>Create legal status.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/LegalStatus/UI/API/Routes/CreateLegalStatus.v1.private.php",
    "groupTitle": "LegalStatus",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "LegalStatus",
    "name": "deleteLegalStatus",
    "type": "DELETE",
    "url": "/v1/legal_status",
    "title": "Delete legal status",
    "description": "<p>Delete legal status.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/LegalStatus/UI/API/Routes/DeleteLegalStatus.v1.private.php",
    "groupTitle": "LegalStatus"
  },
  {
    "group": "LegalStatus",
    "name": "findLegalStatusById",
    "type": "GET",
    "url": "/v1/legal_status",
    "title": "Find legal status",
    "description": "<p>Find legal status.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/LegalStatus/UI/API/Routes/FindLegalStatusById.v1.private.php",
    "groupTitle": "LegalStatus",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "LegalStatus",
    "name": "getAllLegalStatuses",
    "type": "GET",
    "url": "/v1/legal_statuses",
    "title": "Get all legal status",
    "description": "<p>Get all legal status.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager, Farmer"
      }
    ],
    "filename": "app/Containers/LegalStatus/UI/API/Routes/GetAllLegalStatuses.v1.private.php",
    "groupTitle": "LegalStatus",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "LegalStatus",
    "name": "updateLegalStatus",
    "type": "PATCH",
    "url": "/v1/legal_status",
    "title": "Update legal status",
    "description": "<p>Update legal status.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/LegalStatus/UI/API/Routes/UpdateLegalStatus.v1.private.php",
    "groupTitle": "LegalStatus",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Localization",
    "name": "getAllLocalizations",
    "type": "GET",
    "url": "/v1/localizations",
    "title": "Get all localizations",
    "description": "<p>Return all available localizations that are &quot;configured&quot; in the application</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // TODO..\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Localization/UI/API/Routes/GetAllLocalizations.v1.private.php",
    "groupTitle": "Localization"
  },
  {
    "group": "Media",
    "name": "deleteAlbum",
    "type": "DELETE",
    "url": "/v1/album",
    "title": "delete album element",
    "description": "<p>Delete an element from album.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nursery_id",
            "description": "<p>(required without hotspot_id, plot_id)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "hotspot_id",
            "description": "<p>(required without nursery_id, plot_id)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "plot_id",
            "description": "<p>(required without nursery_id, hotspot_id)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Media/UI/API/Routes/DeleteAlbum.v1.private.php",
    "groupTitle": "Media"
  },
  {
    "group": "Media",
    "name": "getAlbum",
    "type": "GET",
    "url": "/v1/album",
    "title": "get album",
    "description": "<p>Get album.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nursery_id",
            "description": "<p>(required without hotspot_id, plot_id)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "hotspot_id",
            "description": "<p>(required without nursery_id, plot_id)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "plot_id",
            "description": "<p>(required without nursery_id, hotspot_id)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Media/UI/API/Routes/GetAlbum.v1.private.php",
    "groupTitle": "Media",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Media\",\n            \"id\": \"d3vza0qrdalkygro\",\n            \"file\": \"9yy3mjShEMM9WhLF5u8j1c7ehzT6FWQZOZ1g8joF.jpeg\",\n            \"caption\": \"sdfghjukilökh\",\n            \"order\": 0\n        },\n        {\n            \"object\": \"Media\",\n            \"id\": \"yxjz9g7a3zlr6pn8\",\n            \"file\": \"H9s5gJstddZcIUEzW9yuYE7jOSo3GnRlIfBTiq50.jpeg\",\n            \"caption\": \"sdfghjukilökh\",\n            \"order\": 1\n        },\n        {\n            \"object\": \"Media\",\n            \"id\": \"pwvjn9lezyl3gm0k\",\n            \"file\": \"LGyBodvkth0fHbUSKPfjCFsQ1Jnq8npMJ1yOfc9n.jpeg\",\n            \"caption\": \"sdfghjukilökh\",\n            \"order\": 2\n        }\n    ],\n    \"meta\": {\n    \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Media",
    "name": "null",
    "type": "GET",
    "url": "/media/:template/:filename",
    "title": "(P) - Imagecache",
    "description": "<p>Url based image manipulation with image caching.</p> <p>options for :template:</p> <ul> <li>small_square (75x75)</li> <li>large_square (150x150)</li> <li>thumbnail (100)*</li> <li>small (240)*</li> <li>small320 (320)*</li> <li>medium (500)*</li> <li>medium640 (640)*</li> <li>medium800 (800)*</li> <li>large (1024)*</li> <li>large1600 (1600)*</li> <li>large2048 (2048)*</li> <li>avatar (150x150)</li> <li>original - original image file</li> <li>download - forces the browser to download the file *keeps original image proportions, size of longest side</li> </ul>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\nBody: the actual image file",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Media/UI/API/Routes/ImageCache.v1.public.php",
    "groupTitle": "Media"
  },
  {
    "group": "Media",
    "name": "orderAlbum",
    "type": "POST",
    "url": "/v1/album/order",
    "title": "reorder album",
    "description": "<p>Reorder album.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nursery_id",
            "description": "<p>(required without hotspot_id, plot_id)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "hotspot_id",
            "description": "<p>(required without nursery_id, plot_id)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "plot_id",
            "description": "<p>(required without nursery_id, hotspot_id)</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "album",
            "description": "<p>(required) if empty, album is deleted ({String}  album[id] (required))</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Media/UI/API/Routes/OrderAlbum.v1.private.php",
    "groupTitle": "Media",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Media\",\n            \"id\": \"d3vza0qrdalkygro\",\n            \"file\": \"9yy3mjShEMM9WhLF5u8j1c7ehzT6FWQZOZ1g8joF.jpeg\",\n            \"caption\": \"sdfghjukilökh\",\n            \"order\": 0\n        },\n        {\n            \"object\": \"Media\",\n            \"id\": \"yxjz9g7a3zlr6pn8\",\n            \"file\": \"H9s5gJstddZcIUEzW9yuYE7jOSo3GnRlIfBTiq50.jpeg\",\n            \"caption\": \"sdfghjukilökh\",\n            \"order\": 1\n        },\n        {\n            \"object\": \"Media\",\n            \"id\": \"pwvjn9lezyl3gm0k\",\n            \"file\": \"LGyBodvkth0fHbUSKPfjCFsQ1Jnq8npMJ1yOfc9n.jpeg\",\n            \"caption\": \"sdfghjukilökh\",\n            \"order\": 2\n        }\n    ],\n    \"meta\": {\n    \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Media",
    "name": "updateAlbum",
    "type": "PATCH",
    "url": "/v1/album",
    "title": "update album item",
    "description": "<p>Update a album item.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nursery_id",
            "description": "<p>(required without hotspot_id, plot_id)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "hotspot_id",
            "description": "<p>(required without nursery_id, plot_id)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "plot_id",
            "description": "<p>(required without nursery_id, hotspot_id)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "caption",
            "description": "<p>(required)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Media/UI/API/Routes/UpdateAlbum.v1.private.php",
    "groupTitle": "Media",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Media\",\n            \"id\": \"d3vza0qrdalkygro\",\n            \"file\": \"9yy3mjShEMM9WhLF5u8j1c7ehzT6FWQZOZ1g8joF.jpeg\",\n            \"caption\": \"flkjasdfhlkgdhlaklkg\",\n            \"order\": 0\n        }\n    ],\n    \"meta\": {\n    \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Media",
    "name": "uploadAlbum",
    "type": "POST",
    "url": "/v1/album/upload",
    "title": "Upload files to album",
    "description": "<p>Upload files to album.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nursery_id",
            "description": "<p>(required without hotspot_id, plot_id)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "hotspot_id",
            "description": "<p>(required without nursery_id, plot_id)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "plot_id",
            "description": "<p>(required without nursery_id, hotspot_id)</p>"
          },
          {
            "group": "Parameter",
            "type": "File",
            "optional": false,
            "field": "album[]",
            "description": "<p>(required|array of images)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Media/UI/API/Routes/UploadAlbum.v1.private.php",
    "groupTitle": "Media",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Media\",\n            \"id\": \"d3vza0qrdalkygro\",\n            \"file\": \"9yy3mjShEMM9WhLF5u8j1c7ehzT6FWQZOZ1g8joF.jpeg\",\n            \"caption\": \"sdfghjukilökh\",\n            \"order\": 0\n        },\n        {\n            \"object\": \"Media\",\n            \"id\": \"yxjz9g7a3zlr6pn8\",\n            \"file\": \"H9s5gJstddZcIUEzW9yuYE7jOSo3GnRlIfBTiq50.jpeg\",\n            \"caption\": \"sdfghjukilökh\",\n            \"order\": 1\n        },\n        {\n            \"object\": \"Media\",\n            \"id\": \"pwvjn9lezyl3gm0k\",\n            \"file\": \"LGyBodvkth0fHbUSKPfjCFsQ1Jnq8npMJ1yOfc9n.jpeg\",\n            \"caption\": \"sdfghjukilökh\",\n            \"order\": 2\n        }\n    ],\n    \"meta\": {\n    \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Nursery",
    "name": "changeNurseryCover",
    "type": "POST",
    "url": "/v1/nursery/cover",
    "title": "Change nursery cover",
    "description": "<p>Change nursery cover.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "File",
            "optional": false,
            "field": "cover",
            "description": "<p>image file (leave empty to delete)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"object\": \"Media\",\n        \"id\": \"v9zdex5mn3kmgyap\",\n        \"title\": \"Spokk\",\n        \"file\": \"hWResLMpBsjTLYf3cfcFRR3MAPzkQzArtOBzwquN.jpeg\",\n        \"ext\": \"jpeg\",\n        \"description\": null,\n        \"alt\": null,\n        \"filename\": \"DSC_6555.jpg\",\n        \"created_at\": \"2019-02-21T18:16:29+00:00\",\n        \"updated_at\": \"2019-02-21T18:16:29+00:00\"\n    },\n    \"meta\": {\n    \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Nursery/UI/API/Routes/ChangeNurseryCover.v1.private.php",
    "groupTitle": "Nursery"
  },
  {
    "group": "Nursery",
    "name": "createNursery",
    "type": "POST",
    "url": "/v1/nursery",
    "title": "Create nursery",
    "description": "<p>Create nursery.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "owner",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "geo_point",
            "description": "<p>geojson</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "cover",
            "description": "<p>image file</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Nursery/UI/API/Routes/CreateNursery.v1.private.php",
    "groupTitle": "Nursery",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Nursery",
    "name": "deleteNursery",
    "type": "DELETE",
    "url": "/v1/nursery",
    "title": "Delete nursery",
    "description": "<p>Delete nursery.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Nursery/UI/API/Routes/DeleteNursery.v1.private.php",
    "groupTitle": "Nursery"
  },
  {
    "group": "Nursery",
    "name": "findNurseryById",
    "type": "GET",
    "url": "/v1/nursery",
    "title": "Find nursery",
    "description": "<p>Find nursery by id.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Nursery/UI/API/Routes/FindNurseryById.v1.private.php",
    "groupTitle": "Nursery",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Nursery",
    "name": "getAllNurseries",
    "type": "GET",
    "url": "/v1/nurseries",
    "title": "Get all nurseries",
    "description": "<p>Get all nurseries.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "filename": "app/Containers/Nursery/UI/API/Routes/GetAllNurseries.v1.private.php",
    "groupTitle": "Nursery",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Nursery",
    "name": "getAllNurseriesPublic",
    "type": "GET",
    "url": "/v1/webmap/nurseries",
    "title": "(P) Get nurseries for webmap",
    "description": "<p>Get nurseries for webmap.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Nursery/UI/API/Routes/GetNurseriesForWebmap.v1.public.php",
    "groupTitle": "Nursery"
  },
  {
    "group": "Nursery",
    "name": "updateNursery",
    "type": "PATCH",
    "url": "/v1/nursery",
    "title": "Update nursery",
    "description": "<p>Update nursery.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "owner",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "geo_point",
            "description": "<p>geojson</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "cover",
            "description": "<p>image file</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Nursery/UI/API/Routes/UpdateNursery.v1.private.php",
    "groupTitle": "Nursery",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "OAuth2",
    "name": "ClientAdminWebAppLoginProxy",
    "type": "post",
    "url": "/v1/clients/web/admin/login",
    "title": "Web App Login (Password Grant with proxy)",
    "description": "<p>Login Users using their email and password, without client_id and client_secret.</p>",
    "version": "1.0.0",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>user email</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>user password</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"token_type\": \"Bearer\",\n  \"expires_in\": 315360000,\n  \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\",\n  \"refresh_token\": \"ZFDPA1S7H8Wydjkjl+xt+hPGWTagX...\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/ProxyLoginForAdminWebClient.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "OAuth2",
    "name": "ClientAdminWebAppRefreshProxy",
    "type": "post",
    "url": "/v1/clients/web/admin/refresh",
    "title": "Web App Refresh",
    "description": "<p>If <code>refresh_token</code> is not provided the w'll try to get it from the http cookie.</p>",
    "version": "1.0.0",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "refresh_token",
            "description": "<p>The refresh Token</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"token_type\": \"Bearer\",\n  \"expires_in\": 315360000,\n  \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\",\n  \"refresh_token\": \"ZFDPA1S7H8Wydjkjl+xt+hPGWTagX...\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/ProxyRefreshForAdminWebClient.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "OAuth2",
    "name": "ClientUserMobileAppLoginProxy",
    "type": "post",
    "url": "/v1/clients/mobile/user/login",
    "title": "Mobile App Login (Password Grant with proxy)",
    "description": "<p>Login Users using their email and password, without client_id and client_secret.</p>",
    "version": "1.0.0",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>user email</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>user password</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"token_type\": \"Bearer\",\n    \"expires_in\": 315360000,\n    \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\",\n    \"refresh_token\": \"ZFDPA1S7H8Wydjkjl+xt+hPGWTagX...\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/ProxyLoginForUserMobileClient.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "OAuth2",
    "name": "ClientUserMobileAppRefreshProxy",
    "type": "post",
    "url": "/v1/clients/mobile/user/refresh",
    "title": "Mobile App Refresh",
    "description": "<p>If <code>refresh_token</code> is not provided the w'll try to get it from the http cookie.</p>",
    "version": "1.0.0",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "refresh_token",
            "description": "<p>The refresh Token</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"token_type\": \"Bearer\",\n    \"expires_in\": 315360000,\n    \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\",\n    \"refresh_token\": \"ZFDPA1S7H8Wydjkjl+xt+hPGWTagX...\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/ProxyRefreshForUserMobileClient.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "OAuth2",
    "name": "LoginCredentialsGrant",
    "type": "post",
    "url": "/v1/oauth/token",
    "title": "Login (Client Credentials Grant)",
    "description": "<p>Login Users using their username and passwords. (For Third-Party Clients). You must have client ID and secret first. You can generate them by creating new Client in our Web App.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "client_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "client_secret",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "grant_type",
            "description": "<p>must be <code>client_credentials</code></p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "scope",
            "description": "<p>you can leave it empty</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"token_type\": \"Bearer\",\n  \"expires_in\": 315360000,\n  \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\",\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/LoginUsingCredentialGrant.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "OAuth2",
    "name": "LoginPasswordGrant",
    "type": "post",
    "url": "/v1/oauth/token",
    "title": "Login (Password Grant)",
    "description": "<p>Login Users using their username and passwords. (For First-Party Clients)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "username",
            "description": "<p>user email</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>user password</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "client_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "client_secret",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "grant_type",
            "description": "<p>must be <code>password</code></p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "scope",
            "description": "<p>you can leave it empty</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"token_type\": \"Bearer\",\n  \"expires_in\": 315360000,\n  \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\",\n  \"refresh_token\": \"Oukd61zgKzt8TBwRjnasd...\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/LoginUsingPasswordGrant.v1.private.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "OAuth2",
    "name": "Logout",
    "type": "DELETE",
    "url": "/v1/logout",
    "title": "Logout",
    "description": "<p>User Logout. (Revoking Access Token)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 Accepted\n{\n  \"message\": \"Token revoked successfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/Logout.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "Payment",
    "name": "deletePaymentAccount",
    "type": "DELETE",
    "url": "/v1/user/paymentaccounts/:id",
    "title": "Delete Payment Account",
    "description": "<p>Deletes a payment account. Also deletes the corresponding model with the account details (e.g., for stripe, ...)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    // ...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Payment/UI/API/Routes/DeletePaymentAccount.v1.private.php",
    "groupTitle": "Payment"
  },
  {
    "group": "Payment",
    "name": "getPaymentAccount",
    "type": "GET",
    "url": "/v1/user/paymentaccounts/:id",
    "title": "Find Payment Account by ID",
    "description": "<p>Find Details for a specific payment account. Note that this outputs respective &quot;visible&quot; fields from the model of the Payment Provider (e.g., Paypal)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // ...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Payment/UI/API/Routes/GetPaymentAccount.v1.private.php",
    "groupTitle": "Payment"
  },
  {
    "group": "Payment",
    "name": "getPaymentAccountDetails",
    "type": "GET",
    "url": "/v1/user/paymentaccounts/:id",
    "title": "Find Payment Account Details",
    "description": "<p>Find Details for a specific payment account. Note that this outputs respective &quot;visible&quot; fields from the model of the Payment Provider (e.g., Paypal)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Payment/UI/API/Routes/FindPaymentAccountDetails.v1.private.php",
    "groupTitle": "Payment"
  },
  {
    "group": "Payment",
    "name": "getPaymentAccounts",
    "type": "GET",
    "url": "/v1/user/paymentaccounts",
    "title": "Get All Payment Accounts",
    "description": "<p>Get All Payment Accounts for this user</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Payment/UI/API/Routes/GetAllPaymentAccounts.v1.private.php",
    "groupTitle": "Payment"
  },
  {
    "group": "Payment",
    "name": "updatePaymentAccount",
    "type": "PATCH",
    "url": "/v1/user/paymentaccounts/:id",
    "title": "Update Payment Account",
    "description": "<p>Updates a single Payment Account. Does NOT (!) update the account credentials from the respective payment gateway (e.g., Paypal).</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    // ...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Payment/UI/API/Routes/UpdatePaymentAccount.v1.private.php",
    "groupTitle": "Payment"
  },
  {
    "group": "PlantingDistance",
    "name": "createPlantingDistance",
    "type": "POST",
    "url": "/v1/planting_distance",
    "title": "Create planting distance",
    "description": "<p>Create planting distance.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/PlantingDistance/UI/API/Routes/CreatePlantingDistance.v1.private.php",
    "groupTitle": "PlantingDistance",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "PlantingDistance",
    "name": "deletePlantingDistance",
    "type": "DELETE",
    "url": "/v1/planting_distance",
    "title": "Delete planting distance",
    "description": "<p>Delete planting distance.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/PlantingDistance/UI/API/Routes/DeletePlantingDistance.v1.private.php",
    "groupTitle": "PlantingDistance"
  },
  {
    "group": "PlantingDistance",
    "name": "findPlantingDistanceById",
    "type": "GET",
    "url": "/v1/planting_distance",
    "title": "Find planting_distance",
    "description": "<p>Find planting distance.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/PlantingDistance/UI/API/Routes/FindPlantingDistanceById.v1.private.php",
    "groupTitle": "PlantingDistance",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "PlantingDistance",
    "name": "getAllPlantingDistances",
    "type": "GET",
    "url": "/v1/planting_distances",
    "title": "Get all planting distances",
    "description": "<p>Get all planting distances.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager, Farmer"
      }
    ],
    "filename": "app/Containers/PlantingDistance/UI/API/Routes/GetAllPlantingDistances.v1.private.php",
    "groupTitle": "PlantingDistance",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "PlantingDistance",
    "name": "updatePlantingDistance",
    "type": "PATCH",
    "url": "/v1/planting_distance",
    "title": "Update planting distance",
    "description": "<p>Update planting distance.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/PlantingDistance/UI/API/Routes/UpdatePlantingDistance.v1.private.php",
    "groupTitle": "PlantingDistance",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Plot",
    "name": "calculatePlotPolygon",
    "type": "POST",
    "url": "/v1/plot/generatepolygon",
    "title": "Generate plot polygon",
    "description": "<p>Generate plot polygon from survey trees. The plot needs a survey with more than 20 trees and treecount NULL (new survey).</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Plot owner | Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required plot identifier</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Plot/UI/API/Routes/GeneratePlotPolygon.v1.private.php",
    "groupTitle": "Plot",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"object\": \"Plot\",\n        \"id\": \"qnwmkv5704blag6r\",\n        \"farmer_id\": \"qnwmkv5704blag6r\",\n        \"project_id\": \"qnwmkv5704blag6r\",\n        \"polygon_id\": \"qnwmkv5704blag6r\",\n        \"species_id\": null,\n        \"soil_type_id\": null,\n        \"legal_status_id\": null,\n        \"village_id\": null,\n        \"point_id\": \"8ykwxd4gx3ampj9v\",\n        \"planting_distance_id\": null,\n        \"supporter_id\": \"6rldzq4kg3nea7jp\",\n        \"nursery_id\": null,\n        \"planting_date\": {\n        \"date\": \"2018-01-01 00:00:00.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"video_url\": null,\n        \"neighbors\": null,\n        \"landscape_features\": null,\n        \"general_conditions\": null,\n        \"fire_fighting\": null,\n        \"active\": true,\n        \"sample\": false,\n        \"plants_planted\": null,\n        \"created_at\": {\n        \"date\": \"2018-11-29 18:02:33.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"updated_at\": {\n        \"date\": \"2018-11-29 18:02:33.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"album\": null,\n        \"field_coordinator_id: \"6rldzq4kg3nea7jp\"\n    },\n    \"meta\": {\n    \"include\": [\n        \"album\",\n        \"farmer\",\n        \"nursery\",\n        \"planting_distance\",\n        \"point\",\n        \"polygon\",\n        \"project\",\n        \"soil_type\",\n        \"species\",\n        \"village\",\n        \"field_coordinator\",\n    ],\n        \"custom\": []\n    },\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Plot",
    "name": "changePlotPolygon",
    "type": "POST",
    "url": "/v1/plot/polygon",
    "title": "Change plot polygon",
    "description": "<p>Change plot polygon.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager or Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "geodata",
            "description": "<p>required <a href=\"https://geojson.org/\">geojson</a> object, must contain polygon or multipolygon</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Plot/UI/API/Routes/ChangePlotPolygon.v1.private.php",
    "groupTitle": "Plot",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"object\": \"Plot\",\n        \"id\": \"qnwmkv5704blag6r\",\n        \"farmer_id\": \"qnwmkv5704blag6r\",\n        \"project_id\": \"qnwmkv5704blag6r\",\n        \"polygon_id\": \"qnwmkv5704blag6r\",\n        \"species_id\": null,\n        \"soil_type_id\": null,\n        \"legal_status_id\": null,\n        \"village_id\": null,\n        \"point_id\": \"8ykwxd4gx3ampj9v\",\n        \"planting_distance_id\": null,\n        \"supporter_id\": \"6rldzq4kg3nea7jp\",\n        \"nursery_id\": null,\n        \"planting_date\": {\n        \"date\": \"2018-01-01 00:00:00.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"video_url\": null,\n        \"neighbors\": null,\n        \"landscape_features\": null,\n        \"general_conditions\": null,\n        \"fire_fighting\": null,\n        \"active\": true,\n        \"sample\": false,\n        \"plants_planted\": null,\n        \"created_at\": {\n        \"date\": \"2018-11-29 18:02:33.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"updated_at\": {\n        \"date\": \"2018-11-29 18:02:33.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"album\": null,\n        \"field_coordinator_id: \"6rldzq4kg3nea7jp\"\n    },\n    \"meta\": {\n    \"include\": [\n        \"album\",\n        \"farmer\",\n        \"nursery\",\n        \"planting_distance\",\n        \"point\",\n        \"polygon\",\n        \"project\",\n        \"soil_type\",\n        \"species\",\n        \"village\",\n        \"field_coordinator\",\n    ],\n        \"custom\": []\n    },\n}",
          "type": "json"
        }
      ]
    },
    "examples": [
      {
        "title": "geojson example:",
        "content": "{\n    \"type\": \"FeatureCollection\",\n    \"features\": [\n        {\n            \"type\": \"Feature\",\n            \"geometry\": {\n                \"type\": \"MultiPolygon\",\n                \"coordinates\": [[[\n                    [113.273898, -1.109575],\n                    [13.835136, 51.056488],\n                    [13.79051, 51.079899],\n                    [113.274313, -1.109084],\n                    [113.297193, -1.121087],\n                    [113.297399, -1.121276],\n                    [113.297235, -1.121637],\n                    [113.297058, -1.121725],\n                    [113.273898, -1.109575]\n                ]]]\n            }\n        }\n    ]\n}",
        "type": "json"
      }
    ]
  },
  {
    "group": "Plot",
    "name": "createPlot",
    "type": "POST",
    "url": "/v1/plot",
    "title": "Create plot",
    "description": "<p>Create plot.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager|Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "farmer_id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "species_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "soil_type_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "legal_status_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "village_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "planting_distance_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "supporter_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nursery_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "field_coordinator_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "planting_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "video_url",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "neighbours",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "landscape_features",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "general_conditions",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "fire_fighting",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Bool",
            "optional": false,
            "field": "active",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Bool",
            "optional": false,
            "field": "sample",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Int",
            "optional": false,
            "field": "plants_planted",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "geo_data",
            "description": "<p><a href=\"https://geojson.org/\">geojson</a> object, must contain polygon or multipolygon</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Plot/UI/API/Routes/CreatePlot.v1.private.php",
    "groupTitle": "Plot",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"object\": \"Plot\",\n        \"id\": \"qnwmkv5704blag6r\",\n        \"farmer_id\": \"qnwmkv5704blag6r\",\n        \"project_id\": \"qnwmkv5704blag6r\",\n        \"polygon_id\": \"qnwmkv5704blag6r\",\n        \"species_id\": null,\n        \"soil_type_id\": null,\n        \"legal_status_id\": null,\n        \"village_id\": null,\n        \"point_id\": \"8ykwxd4gx3ampj9v\",\n        \"planting_distance_id\": null,\n        \"supporter_id\": \"6rldzq4kg3nea7jp\",\n        \"nursery_id\": null,\n        \"planting_date\": {\n        \"date\": \"2018-01-01 00:00:00.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"video_url\": null,\n        \"neighbors\": null,\n        \"landscape_features\": null,\n        \"general_conditions\": null,\n        \"fire_fighting\": null,\n        \"active\": true,\n        \"sample\": false,\n        \"plants_planted\": null,\n        \"created_at\": {\n        \"date\": \"2018-11-29 18:02:33.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"updated_at\": {\n        \"date\": \"2018-11-29 18:02:33.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"album\": null,\n        \"field_coordinator_id: \"6rldzq4kg3nea7jp\"\n    },\n    \"meta\": {\n    \"include\": [\n        \"album\",\n        \"farmer\",\n        \"nursery\",\n        \"planting_distance\",\n        \"point\",\n        \"polygon\",\n        \"project\",\n        \"soil_type\",\n        \"species\",\n        \"village\",\n        \"field_coordinator\",\n    ],\n        \"custom\": []\n    },\n}",
          "type": "json"
        }
      ]
    },
    "examples": [
      {
        "title": "geojson example:",
        "content": "{\n    \"type\": \"FeatureCollection\",\n    \"features\": [\n        {\n            \"type\": \"Feature\",\n            \"geometry\": {\n                \"type\": \"MultiPolygon\",\n                \"coordinates\": [[[\n                    [113.273898, -1.109575],\n                    [13.835136, 51.056488],\n                    [13.79051, 51.079899],\n                    [113.274313, -1.109084],\n                    [113.297193, -1.121087],\n                    [113.297399, -1.121276],\n                    [113.297235, -1.121637],\n                    [113.297058, -1.121725],\n                    [113.273898, -1.109575]\n                ]]]\n            }\n        }\n    ]\n}",
        "type": "json"
      }
    ]
  },
  {
    "group": "Plot",
    "name": "deletePlot",
    "type": "DELETE",
    "url": "/v1/plot",
    "title": "Delete plot",
    "description": "<p>Delete plot.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager|Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Plot/UI/API/Routes/DeletePlot.v1.private.php",
    "groupTitle": "Plot"
  },
  {
    "group": "Plot",
    "name": "deletePlotPolygon",
    "type": "DELETE",
    "url": "/v1/plot/polygon",
    "title": "Delete plot polygon",
    "description": "<p>Delete plot polygon.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Plot/UI/API/Routes/DeletePlotPolygon.v1.private.php",
    "groupTitle": "Plot",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"object\": \"Plot\",\n        \"id\": \"qnwmkv5704blag6r\",\n        \"farmer_id\": \"qnwmkv5704blag6r\",\n        \"project_id\": \"qnwmkv5704blag6r\",\n        \"polygon_id\": \"qnwmkv5704blag6r\",\n        \"species_id\": null,\n        \"soil_type_id\": null,\n        \"legal_status_id\": null,\n        \"village_id\": null,\n        \"point_id\": \"8ykwxd4gx3ampj9v\",\n        \"planting_distance_id\": null,\n        \"supporter_id\": \"6rldzq4kg3nea7jp\",\n        \"nursery_id\": null,\n        \"planting_date\": {\n        \"date\": \"2018-01-01 00:00:00.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"video_url\": null,\n        \"neighbors\": null,\n        \"landscape_features\": null,\n        \"general_conditions\": null,\n        \"fire_fighting\": null,\n        \"active\": true,\n        \"sample\": false,\n        \"plants_planted\": null,\n        \"created_at\": {\n        \"date\": \"2018-11-29 18:02:33.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"updated_at\": {\n        \"date\": \"2018-11-29 18:02:33.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"album\": null,\n        \"field_coordinator_id: \"6rldzq4kg3nea7jp\"\n    },\n    \"meta\": {\n    \"include\": [\n        \"album\",\n        \"farmer\",\n        \"nursery\",\n        \"planting_distance\",\n        \"point\",\n        \"polygon\",\n        \"project\",\n        \"soil_type\",\n        \"species\",\n        \"village\",\n        \"field_coordinator\",\n    ],\n        \"custom\": []\n    },\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Plot",
    "name": "findPlotById",
    "type": "GET",
    "url": "/v1/plot",
    "title": "Find plot",
    "description": "<p>Find plot.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager|Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Plot/UI/API/Routes/FindPlotById.v1.private.php",
    "groupTitle": "Plot",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"object\": \"Plot\",\n        \"id\": \"qnwmkv5704blag6r\",\n        \"farmer_id\": \"qnwmkv5704blag6r\",\n        \"project_id\": \"qnwmkv5704blag6r\",\n        \"polygon_id\": \"qnwmkv5704blag6r\",\n        \"species_id\": null,\n        \"soil_type_id\": null,\n        \"legal_status_id\": null,\n        \"village_id\": null,\n        \"point_id\": \"8ykwxd4gx3ampj9v\",\n        \"planting_distance_id\": null,\n        \"supporter_id\": \"6rldzq4kg3nea7jp\",\n        \"nursery_id\": null,\n        \"planting_date\": {\n        \"date\": \"2018-01-01 00:00:00.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"video_url\": null,\n        \"neighbors\": null,\n        \"landscape_features\": null,\n        \"general_conditions\": null,\n        \"fire_fighting\": null,\n        \"active\": true,\n        \"sample\": false,\n        \"plants_planted\": null,\n        \"created_at\": {\n        \"date\": \"2018-11-29 18:02:33.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"updated_at\": {\n        \"date\": \"2018-11-29 18:02:33.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"album\": null,\n        \"field_coordinator_id: \"6rldzq4kg3nea7jp\"\n    },\n    \"meta\": {\n    \"include\": [\n        \"album\",\n        \"farmer\",\n        \"nursery\",\n        \"planting_distance\",\n        \"point\",\n        \"polygon\",\n        \"project\",\n        \"soil_type\",\n        \"species\",\n        \"village\",\n        \"field_coordinator\",\n    ],\n        \"custom\": []\n    },\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Plot",
    "name": "findPlotByIdExtended",
    "type": "GET",
    "url": "/v1/plot/datatable",
    "title": "Find plot with extended dataset",
    "description": "<p>Find plot with extended dataset.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager|Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Plot/UI/API/Routes/FindPlotByIdExtended.v1.private.php",
    "groupTitle": "Plot",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"PlotView\",\n            \"id\": \"qnwmkv5704blag6r\",\n            \"identifier\": \"67ch\",\n            \"farmer_id\": \"lnmojg5bv4ew80ra\",\n            \"polygon_id\": \"qnwmkv5704blag6r\",\n            \"species_id\": \"qnwmkv5704blag6r\",\n            \"soil_type_id\": \"eq6am74064z0vpbn\",\n            \"legal_status_id\": null,\n            \"village_id\": \"qmv7dk48x5b690wx\",\n            \"point_id\": \"8ykwxd4gx3ampj9v\",\n            \"planting_distance_id\": \"qnwmkv5704blag6r\",\n            \"supporter_id\": null,\n            \"nursery_id\": null,\n            \"planting_date\": \"2015-01-01\",\n            \"video_url\": null,\n            \"neighbors\": null,\n            \"landscape_features\": null,\n            \"general_conditions\": null,\n            \"fire_fighting\": null,\n            \"active\": true,\n            \"sample\": false,\n            \"plants_planted\": null,\n            \"import_id\": 29,\n            \"created_at\": {\n            \"date\": \"2018-12-19 14:17:44.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-12-19 14:17:44.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"deleted_at\": null,\n            \"farmer\": \"j0vi jonedi1\",\n            \"project\": \"1mt\",\n            \"area_m2\": \"600.180\",\n            \"species\": \"Sengon\",\n            \"survey_count\": 2,\n            \"latest_survey_treecount\": 319,\n            \"latest_survey_date\": \"2017-11-14 00:00:00\",\n            \"latest_survey_dbh_mean\": \"14.1064516129032258\",\n            \"latest_survey_height_mean\": \"12.9009677419354839\",\n            \"trees_per_ha\": \"5315.07214502315971875104\",\n            \"latest_survey_tree_volume\": \"479.386531870967741935453\",\n            \"latest_survey_value_ird\": \"287631919.12\",\n            \"latest_survey_value_usd\": \"19810.65\",\n            \"soil_type\": \"Cambisol\",\n            \"legal_status\": null,\n            \"village\": \"Tehang\",\n            \"district\": null,\n            \"planting_distance\": \"3x3\",\n            \"supporter\": null,\n            \"nursery\": null,\n            \"field_coordninator\": \"Rentas Gunawan\"\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Plot",
    "name": "forcePlotpolygon",
    "type": "POST",
    "url": "/v1/plot/forceplotpolygon",
    "title": "Force calculation of a plot polygon from survey",
    "description": "<p>Force calculation of a plot polygon from survey.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Admin"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "survey_id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Plot/UI/API/Routes/ForcePlotPolygon.v1.private.php",
    "groupTitle": "Plot"
  },
  {
    "group": "Plot",
    "name": "getAllPlots",
    "type": "GET",
    "url": "/v1/plots",
    "title": "Get all plots",
    "description": "<p>Get all plots.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "filename": "app/Containers/Plot/UI/API/Routes/GetAllPlots.v1.private.php",
    "groupTitle": "Plot",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"object\": \"Plot\",\n        \"id\": \"qnwmkv5704blag6r\",\n        \"farmer_id\": \"qnwmkv5704blag6r\",\n        \"project_id\": \"qnwmkv5704blag6r\",\n        \"polygon_id\": \"qnwmkv5704blag6r\",\n        \"species_id\": null,\n        \"soil_type_id\": null,\n        \"legal_status_id\": null,\n        \"village_id\": null,\n        \"point_id\": \"8ykwxd4gx3ampj9v\",\n        \"planting_distance_id\": null,\n        \"supporter_id\": \"6rldzq4kg3nea7jp\",\n        \"nursery_id\": null,\n        \"planting_date\": {\n        \"date\": \"2018-01-01 00:00:00.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"video_url\": null,\n        \"neighbors\": null,\n        \"landscape_features\": null,\n        \"general_conditions\": null,\n        \"fire_fighting\": null,\n        \"active\": true,\n        \"sample\": false,\n        \"plants_planted\": null,\n        \"created_at\": {\n        \"date\": \"2018-11-29 18:02:33.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"updated_at\": {\n        \"date\": \"2018-11-29 18:02:33.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"album\": null,\n        \"field_coordinator_id: \"6rldzq4kg3nea7jp\"\n    },\n    \"meta\": {\n    \"include\": [\n        \"album\",\n        \"farmer\",\n        \"nursery\",\n        \"planting_distance\",\n        \"point\",\n        \"polygon\",\n        \"project\",\n        \"soil_type\",\n        \"species\",\n        \"village\",\n        \"field_coordinator\",\n    ],\n        \"custom\": []\n    },\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Plot",
    "name": "getAllPlotsCsv",
    "type": "GET",
    "url": "/v1/plots/csv",
    "title": "Get all plots as csv file",
    "description": "<p>Get all plots as csv file. <strong>Extended filters can be applied.</strong></p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Plot/UI/API/Routes/GetAllPlotsCsv.v1.private.php",
    "groupTitle": "Plot"
  },
  {
    "group": "Plot",
    "name": "getOwnPlots",
    "type": "GET",
    "url": "/v1/plots/own",
    "title": "Get own plots",
    "description": "<p>Get only own plots.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Farmer"
      }
    ],
    "filename": "app/Containers/Plot/UI/API/Routes/GetOwnPlots.v1.private.php",
    "groupTitle": "Plot",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"object\": \"Plot\",\n        \"id\": \"qnwmkv5704blag6r\",\n        \"farmer_id\": \"qnwmkv5704blag6r\",\n        \"project_id\": \"qnwmkv5704blag6r\",\n        \"polygon_id\": \"qnwmkv5704blag6r\",\n        \"species_id\": null,\n        \"soil_type_id\": null,\n        \"legal_status_id\": null,\n        \"village_id\": null,\n        \"point_id\": \"8ykwxd4gx3ampj9v\",\n        \"planting_distance_id\": null,\n        \"supporter_id\": \"6rldzq4kg3nea7jp\",\n        \"nursery_id\": null,\n        \"planting_date\": {\n        \"date\": \"2018-01-01 00:00:00.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"video_url\": null,\n        \"neighbors\": null,\n        \"landscape_features\": null,\n        \"general_conditions\": null,\n        \"fire_fighting\": null,\n        \"active\": true,\n        \"sample\": false,\n        \"plants_planted\": null,\n        \"created_at\": {\n        \"date\": \"2018-11-29 18:02:33.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"updated_at\": {\n        \"date\": \"2018-11-29 18:02:33.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"album\": null,\n        \"field_coordinator_id: \"6rldzq4kg3nea7jp\"\n    },\n    \"meta\": {\n    \"include\": [\n        \"album\",\n        \"farmer\",\n        \"nursery\",\n        \"planting_distance\",\n        \"point\",\n        \"polygon\",\n        \"project\",\n        \"soil_type\",\n        \"species\",\n        \"village\",\n        \"field_coordinator\",\n    ],\n        \"custom\": []\n    },\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Plot",
    "name": "getPlotAlbumPublic",
    "type": "GET",
    "url": "/v1/public/plots/map",
    "title": "(P) Get plots for map",
    "description": "<p>Get plots for map.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Plot/UI/API/Routes/GetPlotsForMap.v1.public.php",
    "groupTitle": "Plot"
  },
  {
    "group": "Plot",
    "name": "getPlotMap",
    "type": "GET",
    "url": "/v1/plot/map",
    "title": "Get plot map",
    "description": "<p>Get plot map.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required project identifier</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"type\": \"FeatureCollection\",\n    \"features\": [\n        {\n            \"type\": \"Feature\",\n            \"geometry\": {\n                \"type\": \"MultiPolygon\",\n                    \"coordinates\": [\n                    [\n                        [\n                            [\n                                113.296398,\n                                -1.120945\n                            ],\n                            [\n                                113.297457,\n                                -1.121112\n                            ],\n                            [\n                                113.2974,\n                                -1.121653\n                            ],\n                            [\n                                113.296778,\n                                -1.12168\n                            ],\n                            [\n                                113.296398,\n                                -1.120945\n                            ]\n                        ]\n                    ]\n                ]\n            },\n            \"properties\": {\n                \"id\": \"c3bu\"\n            },\n            \"id\": \"c3bu\"\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Plot/UI/API/Routes/GetPlotMap.v1.private.php",
    "groupTitle": "Plot"
  },
  {
    "group": "Plot",
    "name": "getPlotsForMap",
    "type": "GET",
    "url": "/v1/plots/map",
    "title": "get plots as geojson for map",
    "description": "<p>get plots as geojson for map.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"type\": \"FeatureCollection\",\n    \"features\": [\n        {\n            \"id\": \"67ch\",\n            \"type\": \"Feature\",\n            \"geometry\": {\n            \"type\": \"MultiPolygon\",\n                \"coordinates\": [\n                [\n                    [\n                        [\n                            113.296398,\n                            -1.120945\n                        ],\n                        [\n                            113.297457,\n                            -1.121112\n                        ],\n                        [\n                            113.2974,\n                            -1.121653\n                        ],\n                        [\n                            113.296778,\n                            -1.12168\n                        ],\n                        [\n                            113.296398,\n                            -1.120945\n                        ]\n                    ]\n                ]\n            ]\n            },\n            \"properties\": {\n            \"id\": \"67ch\",\n                \"type\": \"plot\",\n                \"active\": true,\n                \"farmer\": \"j0vi jonedi1\",\n                \"area_m2\": 600.18,\n                \"species\": \"Sengon\",\n                \"soil_type\": \"Cambisol\",\n                \"updated_at\": \"2018-12-19T14:17:44\",\n                \"legal_status\": null,\n                \"survey_count\": 2,\n                \"trees_per_ha\": 5315.07214502315971875104,\n                \"planting_date\": \"2015-01-01\",\n                \"plants_planted\": null,\n                \"planting_distance\": \"3x3\",\n                \"latest_survey_dbh_mean\": 14.1064516129032258,\n                \"latest_survey_treecount\": 319,\n                \"latest_survey_value_ird\": 287631919.12,\n                \"latest_survey_value_usd\": 19810.65,\n                \"latest_survey_height_mean\": 12.9009677419354839,\n                \"latest_survey_tree_volume\": 479.386531870967741935453\n            }\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Plot/UI/API/Routes/GetPlotsForMap.v1.private.php",
    "groupTitle": "Plot"
  },
  {
    "group": "Plot",
    "name": "getPlotsView",
    "type": "GET",
    "url": "/v1/plots/datatable",
    "title": "Get plots as filterable objects.",
    "description": "<p>Get plots as filterable objects. <strong>Extended filters can be applied.</strong></p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "filename": "app/Containers/Plot/UI/API/Routes/GetPlotsView.v1.private.php",
    "groupTitle": "Plot",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"PlotView\",\n            \"id\": \"qnwmkv5704blag6r\",\n            \"identifier\": \"67ch\",\n            \"farmer_id\": \"lnmojg5bv4ew80ra\",\n            \"polygon_id\": \"qnwmkv5704blag6r\",\n            \"species_id\": \"qnwmkv5704blag6r\",\n            \"soil_type_id\": \"eq6am74064z0vpbn\",\n            \"legal_status_id\": null,\n            \"village_id\": \"qmv7dk48x5b690wx\",\n            \"point_id\": \"8ykwxd4gx3ampj9v\",\n            \"planting_distance_id\": \"qnwmkv5704blag6r\",\n            \"supporter_id\": null,\n            \"nursery_id\": null,\n            \"planting_date\": \"2015-01-01\",\n            \"video_url\": null,\n            \"neighbors\": null,\n            \"landscape_features\": null,\n            \"general_conditions\": null,\n            \"fire_fighting\": null,\n            \"active\": true,\n            \"sample\": false,\n            \"plants_planted\": null,\n            \"import_id\": 29,\n            \"created_at\": {\n            \"date\": \"2018-12-19 14:17:44.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-12-19 14:17:44.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"deleted_at\": null,\n            \"farmer\": \"j0vi jonedi1\",\n            \"project\": \"1mt\",\n            \"area_m2\": \"600.180\",\n            \"species\": \"Sengon\",\n            \"survey_count\": 2,\n            \"latest_survey_treecount\": 319,\n            \"latest_survey_date\": \"2017-11-14 00:00:00\",\n            \"latest_survey_dbh_mean\": \"14.1064516129032258\",\n            \"latest_survey_height_mean\": \"12.9009677419354839\",\n            \"trees_per_ha\": \"5315.07214502315971875104\",\n            \"latest_survey_tree_volume\": \"479.386531870967741935453\",\n            \"latest_survey_value_ird\": \"287631919.12\",\n            \"latest_survey_value_usd\": \"19810.65\",\n            \"soil_type\": \"Cambisol\",\n            \"legal_status\": null,\n            \"village\": \"Tehang\",\n            \"district\": null,\n            \"planting_distance\": \"3x3\",\n            \"supporter\": null,\n            \"nursery\": null,\n            \"field_coordninator\": \"Rentas Gunawan\"\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Plot",
    "name": "updatePlot",
    "type": "PATCH",
    "url": "/v1/plot",
    "title": "Update plot",
    "description": "<p>Update plot.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager|Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "farmer_id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "species_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "soil_type_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "legal_status_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "village_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "planting_distance_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "supporter_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nursery_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "field_coordinator_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "planting_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "video_url",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "neighbours",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "landscape_features",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "general_conditions",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "fire_fighting",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Bool",
            "optional": false,
            "field": "active",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Bool",
            "optional": false,
            "field": "sample",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Int",
            "optional": false,
            "field": "plants_planted",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "geo_data",
            "description": "<p><a href=\"https://geojson.org/\">geojson</a> object, must contain polygon or multipolygon</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Plot/UI/API/Routes/UpdatePlot.v1.private.php",
    "groupTitle": "Plot",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"object\": \"Plot\",\n        \"id\": \"qnwmkv5704blag6r\",\n        \"farmer_id\": \"qnwmkv5704blag6r\",\n        \"project_id\": \"qnwmkv5704blag6r\",\n        \"polygon_id\": \"qnwmkv5704blag6r\",\n        \"species_id\": null,\n        \"soil_type_id\": null,\n        \"legal_status_id\": null,\n        \"village_id\": null,\n        \"point_id\": \"8ykwxd4gx3ampj9v\",\n        \"planting_distance_id\": null,\n        \"supporter_id\": \"6rldzq4kg3nea7jp\",\n        \"nursery_id\": null,\n        \"planting_date\": {\n        \"date\": \"2018-01-01 00:00:00.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"video_url\": null,\n        \"neighbors\": null,\n        \"landscape_features\": null,\n        \"general_conditions\": null,\n        \"fire_fighting\": null,\n        \"active\": true,\n        \"sample\": false,\n        \"plants_planted\": null,\n        \"created_at\": {\n        \"date\": \"2018-11-29 18:02:33.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"updated_at\": {\n        \"date\": \"2018-11-29 18:02:33.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"album\": null,\n        \"field_coordinator_id: \"6rldzq4kg3nea7jp\"\n    },\n    \"meta\": {\n    \"include\": [\n        \"album\",\n        \"farmer\",\n        \"nursery\",\n        \"planting_distance\",\n        \"point\",\n        \"polygon\",\n        \"project\",\n        \"soil_type\",\n        \"species\",\n        \"village\",\n        \"field_coordinator\",\n    ],\n        \"custom\": []\n    },\n}",
          "type": "json"
        }
      ]
    },
    "examples": [
      {
        "title": "geojson example:",
        "content": "{\n    \"type\": \"FeatureCollection\",\n    \"features\": [\n        {\n            \"type\": \"Feature\",\n            \"geometry\": {\n                \"type\": \"MultiPolygon\",\n                \"coordinates\": [[[\n                    [113.273898, -1.109575],\n                    [13.835136, 51.056488],\n                    [13.79051, 51.079899],\n                    [113.274313, -1.109084],\n                    [113.297193, -1.121087],\n                    [113.297399, -1.121276],\n                    [113.297235, -1.121637],\n                    [113.297058, -1.121725],\n                    [113.273898, -1.109575]\n                ]]]\n            }\n        }\n    ]\n}",
        "type": "json"
      }
    ]
  },
  {
    "group": "Project",
    "name": "createProject",
    "type": "POST",
    "url": "/v1/project",
    "title": "Create project",
    "description": "<p>Create project.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Project/UI/API/Routes/CreateProject.v1.private.php",
    "groupTitle": "Project",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Project",
    "name": "deleteProject",
    "type": "DELETE",
    "url": "/v1/project",
    "title": "Delete project",
    "description": "<p>Delete project.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Project/UI/API/Routes/DeleteProject.v1.private.php",
    "groupTitle": "Project"
  },
  {
    "group": "Project",
    "name": "findProjectById",
    "type": "GET",
    "url": "/v1/project",
    "title": "Find project",
    "description": "<p>Find project.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Project/UI/API/Routes/FindProjectById.v1.private.php",
    "groupTitle": "Project",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Project",
    "name": "getAllProjects",
    "type": "GET",
    "url": "/v1/projects",
    "title": "Get all projects",
    "description": "<p>Get all projects.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager, Farmer"
      }
    ],
    "filename": "app/Containers/Project/UI/API/Routes/GetAllProjects.v1.private.php",
    "groupTitle": "Project",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Project",
    "name": "updateProject",
    "type": "PATCH",
    "url": "/v1/project",
    "title": "Update project",
    "description": "<p>Update project.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Project/UI/API/Routes/UpdateProject.v1.private.php",
    "groupTitle": "Project",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "assignUserToRole",
    "type": "post",
    "url": "/v1/roles/assign",
    "title": "Assign User to Roles",
    "description": "<p>Assign new roles to user. This endpoint does not sync the user with the new roles. It simply assign new role to the user. So make sure to never send an already assigned role since it will cause an error. To sync (update) all existing roles with the new ones use <code>/roles/sync</code> endpoint instead.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": "<p>User ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "roles_ids",
            "description": "<p>Role ID or Array of Roles ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/AssignUserToRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "attachPermissionToRole",
    "type": "post",
    "url": "/v1/permissions/attach",
    "title": "Attach Permissions to Role",
    "description": "<p>Attach new permissions to role. This endpoint does not sync the role with the new permissions. It simply attach new permission to the role. So make sure to never send an already attached permission since it will cause an error. To sync (update) all existing permissions with the new ones use <code>/permissions/sync</code> endpoint instead.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "role_id",
            "description": "<p>Role ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "permissions_ids",
            "description": "<p>Permission ID or Array of Permissions ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/AttachPermissionToRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "createRole",
    "type": "post",
    "url": "/v1/roles",
    "title": "Create a Role",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>Unique Role Name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "description",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "display_name",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/CreateRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "deleteRole",
    "type": "delete",
    "url": "/v1/roles/:id",
    "title": "Delete a Role",
    "description": "<p>Delete Role by ID</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated Role"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n    \"message\": \"Role (manager) Deleted Successfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/DeleteRole.v1.private.php",
    "groupTitle": "RolePermission"
  },
  {
    "group": "RolePermission",
    "name": "detachPermissionFromRole",
    "type": "post",
    "url": "/v1/permissions/detach",
    "title": "Detach Permissions from Role",
    "description": "<p>Detach existing permission from role. This endpoint does not sync the role It just detach the passed permissions from the role. So make sure to never send an non attached permission since it will cause an error. To sync (update) all existing permissions with the new ones use <code>/permissions/sync</code> endpoint instead.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "role_id",
            "description": "<p>Role ID</p>"
          },
          {
            "group": "Parameter",
            "type": "String-Array",
            "optional": false,
            "field": "permissions_ids",
            "description": "<p>Permission ID or Array of Permissions ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/DetachPermissionsFromRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "getAllPermissions",
    "type": "get",
    "url": "/v1/permissions",
    "title": "Get All Permission",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/GetAllPermissions.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "getAllRoles",
    "type": "get",
    "url": "/v1/roles",
    "title": "Get All Roles",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/GetAllRoles.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "getPermission",
    "type": "get",
    "url": "/v1/permissions/:id",
    "title": "Find a Permission by ID",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/FindPermission.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Permission\",\n      \"id\":\"n9kq6345javb05je\",\n      \"name\":\"amet-ducimus\",\n      \"description\":null,\n      \"display_name\":null\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "getRole",
    "type": "get",
    "url": "/v1/roles/:id",
    "title": "Find a Role by ID",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/FindRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "revokeRoleFromUser",
    "type": "post",
    "url": "/v1/roles/revoke",
    "title": "Revoke/Remove Roles from User",
    "description": "<p>Revoke existing roles from user. This endpoint does not sync the user It just revoke the passed role from the user. So make sure to never send a non assigned role since it will cause an error. To sync (update) all existing roles with the new ones use <code>/roles/sync</code> endpoint instead.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": "<p>user ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "roles_ids",
            "description": "<p>Role ID or Array of Role ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/RevokeUserFromRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "syncPermissionOnRole",
    "type": "post",
    "url": "/v1/permissions/sync",
    "title": "Sync Permissions on Role",
    "description": "<p>You can use this endpoint instead of <code>permissions/attach</code> &amp; <code>permissions/detach</code>. The sync endpoint will override all existing role permissions with the new one sent to this endpoint.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "role_id",
            "description": "<p>Role ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "permissions_ids",
            "description": "<p>Permission ID or Array of Permissions ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/SyncPermissionOnRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "syncUserRoles",
    "type": "post",
    "url": "/v1/roles/sync",
    "title": "Sync User Roles",
    "description": "<p>You can use this endpoint instead of <code>roles/assign</code> &amp; <code>roles/revoke</code>. The sync endpoint will override all existing user roles with the new one sent to this endpoint.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": "<p>User ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "roles_ids",
            "description": "<p>Role ID or Array of Roles ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/SyncUserRoles.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Settings",
    "name": "createSetting",
    "type": "POST",
    "url": "/v1/settings",
    "title": "Create Setting",
    "description": "<p>Create a new setting for the application</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n        \"object\": \"Setting\",\n        \"id\": \"aadfa72342sa\",\n        \"key\": \"hello\",\n        \"value\": \"world\"\n    },\n    \"meta\": {\n        \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Settings/UI/API/Routes/CreateSetting.v1.private.php",
    "groupTitle": "Settings"
  },
  {
    "group": "Settings",
    "name": "deleteSetting",
    "type": "DELETE",
    "url": "/v1/settings/:id",
    "title": "Delete Setting",
    "description": "<p>Deletes a setting entry</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 204 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Settings/UI/API/Routes/DeleteSetting.v1.private.php",
    "groupTitle": "Settings"
  },
  {
    "group": "Settings",
    "name": "getAllSettings",
    "type": "GET",
    "url": "/v1/settings",
    "title": "Get All Settings",
    "description": "<p>Get All settings for the application</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Setting\",\n            \"id\": \"damq35egme74k0xv\",\n            \"key\": \"foo\",\n            \"value\": \"bar\"\n        },\n        {\n            \"object\": \"Setting\",\n            \"id\": \"damq35egme74k0xv\",\n            \"key\": \"test\",\n            \"value\": \"456\"\n        },\n        {\n            \"object\": \"Setting\",\n            \"id\": \"damq35egme74k0xv\",\n            \"key\": \"logout\",\n            \"value\": \"false\"\n        }\n    ],\n    \"meta\": {\n\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Settings/UI/API/Routes/GetAllSettings.v1.private.php",
    "groupTitle": "Settings"
  },
  {
    "group": "Settings",
    "name": "updateSetting",
    "type": "PATCH",
    "url": "/v1/settings/:id",
    "title": "Update Setting",
    "description": "<p>Updates a setting entry (both key / value)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n        \"object\": \"Setting\",\n        \"id\": \"aadfa72342sa\",\n        \"key\": \"foo\",\n        \"value\": \"bar\"\n    },\n    \"meta\": {\n        \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Settings/UI/API/Routes/UpdateSetting.v1.private.php",
    "groupTitle": "Settings"
  },
  {
    "group": "SocialAuth",
    "name": "socialAuthFb",
    "type": "post",
    "url": "/v1/auth/facebook",
    "title": "",
    "description": "<p>After getting the User Token from facebook, call this Endpoint passing the user token to it in order to fetch his data and create the user in our database if not exist or return the existing one. For testing purposes use this endpoint <code>auth/facebook</code> to get the token.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "optional": false,
            "field": "oauth_token",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n        \"object\": \"User\",\n        \"id\": \"eqwja3vw94kzmxr1\",\n        \"name\": \"Mahmoud Zalt\",\n        \"email\": null,\n        \"confirmed\": false,\n        \"nickname\": null,\n        \"gender\": null,\n        \"birth\": null,\n        \"social_auth_provider\": \"facebook\",\n        \"social_id\": \"42719726\",\n        \"social_avatar\": {\n            \"avatar\": null,\n            \"original\": null\n        },\n        \"created_at\": {\n            \"date\": \"2017-10-20 21:45:03.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"updated_at\": {\n            \"date\": \"2017-10-20 21:45:03.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"readable_created_at\": \"48 minutes ago\",\n        \"readable_updated_at\": \"48 minutes ago\"\n    },\n    \"meta\": {\n        \"include\": [\n            \"roles\"\n        ],\n        \"custom\": {\n            \"token_type\": \"personal\",\n            \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUxI...\"\n        }\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/SocialAuth/UI/API/Routes/AuthenticateAll.v1.private.php",
    "groupTitle": "SocialAuth"
  },
  {
    "group": "SocialAuth",
    "name": "socialAuthTw",
    "type": "post",
    "url": "/v1/auth/twitter",
    "title": "",
    "description": "<p>After getting the User Token from twitter, call this Endpoint passing the user token to it in order to fetch his data and create the user in our database if not exist or return the existing one. For testing purposes use this endpoint <code>auth/twitter/</code> to get the token.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "optional": false,
            "field": "oauth_token",
            "description": ""
          },
          {
            "group": "Parameter",
            "optional": false,
            "field": "oauth_secret",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n        \"object\": \"User\",\n        \"id\": \"eqwja3vw94kzmxr0\",\n        \"name\": \"Mahmoud Zalt\",\n        \"email\": null,\n        \"confirmed\": false,\n        \"nickname\": null,\n        \"gender\": null,\n        \"birth\": null,\n        \"social_auth_provider\": \"twitter\",\n        \"social_id\": \"42719726\",\n        \"social_avatar\": {\n            \"avatar\": \"http://pbs.twimg.com/profile_images/1111111111/PENrcePC_normal.jpg\",\n            \"original\": null\n        },\n        \"created_at\": {\n            \"date\": \"2017-10-20 21:45:03.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"updated_at\": {\n            \"date\": \"2017-10-20 21:45:03.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"readable_created_at\": \"48 minutes ago\",\n        \"readable_updated_at\": \"48 minutes ago\"\n    },\n    \"meta\": {\n        \"include\": [\n            \"roles\"\n        ],\n        \"custom\": {\n            \"token_type\": \"personal\",\n            \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI...\"\n        }\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/SocialAuth/UI/API/Routes/AuthenticateAll.v1.private.php",
    "groupTitle": "SocialAuth"
  },
  {
    "group": "SoilType",
    "name": "createSoilType",
    "type": "POST",
    "url": "/v1/soil_type",
    "title": "Create soil type",
    "description": "<p>Create soil type.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/SoilType/UI/API/Routes/CreateSoilType.v1.private.php",
    "groupTitle": "SoilType",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "SoilType",
    "name": "deleteSoilType",
    "type": "DELETE",
    "url": "/v1/soil_type",
    "title": "Delete soil type",
    "description": "<p>Delete soil type.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/SoilType/UI/API/Routes/DeleteSoilType.v1.private.php",
    "groupTitle": "SoilType"
  },
  {
    "group": "SoilType",
    "name": "findSoilTypeById",
    "type": "GET",
    "url": "/v1/soil_type",
    "title": "Find soil type",
    "description": "<p>Find soil type.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/SoilType/UI/API/Routes/FindSoilTypeById.v1.private.php",
    "groupTitle": "SoilType",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "SoilType",
    "name": "getAllSoilTypes",
    "type": "GET",
    "url": "/v1/soil_types",
    "title": "Get all soil types",
    "description": "<p>Get all soil types.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager, Farmer"
      }
    ],
    "filename": "app/Containers/SoilType/UI/API/Routes/GetAllSoilTypes.v1.private.php",
    "groupTitle": "SoilType",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "SoilType",
    "name": "updateSoilType",
    "type": "PATCH",
    "url": "/v1/soil_type",
    "title": "Update soil type",
    "description": "<p>Update soil type.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/SoilType/UI/API/Routes/UpdateSoilType.v1.private.php",
    "groupTitle": "SoilType",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Species",
    "name": "createSpecies",
    "type": "POST",
    "url": "/v1/species",
    "title": "Create species",
    "description": "<p>Create species.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "latin_name",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Species/UI/API/Routes/CreateSpecies.v1.private.php",
    "groupTitle": "Species",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Species",
    "name": "deleteSpecies",
    "type": "DELETE",
    "url": "/v1/species",
    "title": "Delete species",
    "description": "<p>Delete sepcies.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Species/UI/API/Routes/DeleteSpecies.v1.private.php",
    "groupTitle": "Species"
  },
  {
    "group": "Species",
    "name": "findSpeciesById",
    "type": "GET",
    "url": "/v1/species",
    "title": "Find species",
    "description": "<p>Find species.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Species/UI/API/Routes/FindSpeciesById.v1.private.php",
    "groupTitle": "Species",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Species",
    "name": "getAllSpecies",
    "type": "GET",
    "url": "/v1/species/all",
    "title": "Get all species",
    "description": "<p>Get all species.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager, Farmer"
      }
    ],
    "filename": "app/Containers/Species/UI/API/Routes/GetAllSpecies.v1.private.php",
    "groupTitle": "Species",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Species",
    "name": "updateSpecies",
    "type": "PATCH",
    "url": "/v1/species",
    "title": "Update species",
    "description": "<p>Update species.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "latin_name",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Species/UI/API/Routes/UpdateSpecies.v1.private.php",
    "groupTitle": "Species",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Stripe",
    "name": "createStripeAccount",
    "type": "post",
    "url": "/v1/user/payments/accounts/stripe",
    "title": "Create Stripe Account",
    "description": "<p>Before calling this endpoint make sure to call Stripe first and get the <code>customer_id</code>. You may use &quot;Stripe Checkout&quot; or &quot;Stripe.js&quot; to make your Stripe call. This Information will be used to charge the user whenever he to purchase anything on the platform.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "customer_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "card_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "card_funding",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "card_last_digits",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "card_fingerprint",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nickname",
            "description": "<p>payment nickname for your usage</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n   \"message\":\"Stripe account created successfully.\",\n   \"stripe_account_id\":1\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Stripe/UI/API/Routes/CreateStripeAccount.v1.private.php",
    "groupTitle": "Stripe"
  },
  {
    "group": "Stripe",
    "name": "updateStripeAccount",
    "type": "PATCH",
    "url": "/v1/user/payments/accounts/stripe/:id",
    "title": "Update Stripe Account",
    "description": "<p>Update a stripe account.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Stripe/UI/API/Routes/UpdateStripeAccount.v1.private.php",
    "groupTitle": "Stripe"
  },
  {
    "group": "Supporter",
    "name": "changeSupporterLogo",
    "type": "POST",
    "url": "/v1/supporter/logo",
    "title": "Change supporter logo",
    "description": "<p>Change supporter logo.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "File",
            "optional": false,
            "field": "logo",
            "description": "<p>image file (leave empty to delete)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n    \"object\": \"Media\",\n        \"id\": \"v9zdex5mn3kmgyap\",\n        \"title\": \"Spokk\",\n        \"file\": \"hWResLMpBsjTLYf3cfcFRR3MAPzkQzArtOBzwquN.jpeg\",\n        \"ext\": \"jpeg\",\n        \"description\": null,\n        \"alt\": null,\n        \"filename\": \"DSC_6555.jpg\",\n        \"created_at\": \"2019-02-21T18:16:29+00:00\",\n        \"updated_at\": \"2019-02-21T18:16:29+00:00\"\n    },\n    \"meta\": {\n    \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Supporter/UI/API/Routes/ChangeSupporterLogo.v1.private.php",
    "groupTitle": "Supporter"
  },
  {
    "group": "Supporter",
    "name": "createSupporter",
    "type": "POST",
    "url": "/v1/supporter",
    "title": "Create supporter",
    "description": "<p>Create supporter.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "File",
            "optional": false,
            "field": "logo",
            "description": "<p>image</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "path",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Supporter/UI/API/Routes/CreateSupporter.v1.private.php",
    "groupTitle": "Supporter",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": [\n    {\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Supporter",
    "name": "deleteSupporter",
    "type": "DELETE",
    "url": "/v1/supporter",
    "title": "Delete supporter",
    "description": "<p>Delete supporter.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Supporter/UI/API/Routes/DeleteSupporter.v1.private.php",
    "groupTitle": "Supporter"
  },
  {
    "group": "Supporter",
    "name": "findSupporterById",
    "type": "GET",
    "url": "/v1/supporter",
    "title": "Find supporter",
    "description": "<p>Find supporter.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Supporter/UI/API/Routes/FindSupporterById.v1.private.php",
    "groupTitle": "Supporter",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": [\n    {\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Supporter",
    "name": "getAllSupporters",
    "type": "GET",
    "url": "/v1/supporters",
    "title": "Get all supporters",
    "description": "<p>Get all supporters.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "filename": "app/Containers/Supporter/UI/API/Routes/GetAllSupporters.v1.private.php",
    "groupTitle": "Supporter",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": [\n    {\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Supporter",
    "name": "updateSupporter",
    "type": "PATCH",
    "url": "/v1/supporter",
    "title": "Update supporter",
    "description": "<p>Update supporter.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "File",
            "optional": false,
            "field": "logo",
            "description": "<p>image</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "path",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Supporter/UI/API/Routes/UpdateSupporter.v1.private.php",
    "groupTitle": "Supporter",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": [\n    {\n    }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "SurveyStatus",
    "name": "createSurveyStatus",
    "type": "POST",
    "url": "/v1/survey_status",
    "title": "Create survey_status",
    "description": "<p>Create survey_status.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/SurveyStatus/UI/API/Routes/CreateSurveyStatus.v1.private.php",
    "groupTitle": "SurveyStatus",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": [\n{\n}\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "SurveyStatus",
    "name": "deleteSurveyStatus",
    "type": "DELETE",
    "url": "/v1/survey_status",
    "title": "Delete survey_status",
    "description": "<p>Delete survey_status.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/SurveyStatus/UI/API/Routes/DeleteSurveyStatus.v1.private.php",
    "groupTitle": "SurveyStatus"
  },
  {
    "group": "SurveyStatus",
    "name": "findSurveyStatusById",
    "type": "GET",
    "url": "/v1/survey_status",
    "title": "Find status_id",
    "description": "<p>Find status_id.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/SurveyStatus/UI/API/Routes/FindSurveyStatusById.v1.private.php",
    "groupTitle": "SurveyStatus",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": [\n{\n}\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "SurveyStatus",
    "name": "getAllSurveyStatuses",
    "type": "GET",
    "url": "/v1/survey_statuses",
    "title": "Get all survey_statuses",
    "description": "<p>Get all survey_statuses.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager, Farmer"
      }
    ],
    "filename": "app/Containers/SurveyStatus/UI/API/Routes/GetAllSurveyStatuses.v1.private.php",
    "groupTitle": "SurveyStatus",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": [\n{\n}\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "SurveyStatus",
    "name": "updateSurveyStatus",
    "type": "PATCH",
    "url": "/v1/survey_status",
    "title": "Update survey_status",
    "description": "<p>Update survey_status.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/SurveyStatus/UI/API/Routes/UpdateSurveyStatus.v1.private.php",
    "groupTitle": "SurveyStatus",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": [\n{\n}\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Survey",
    "name": "createSurvey",
    "type": "POST",
    "url": "/v1/survey",
    "title": "Create survey",
    "description": "<p>Create survey.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager|Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "date_start",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "date_end",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "plot_id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "notes",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "status_id",
            "description": "<p>survey_status</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "treecount",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Survey/UI/API/Routes/CreateSurvey.v1.private.php",
    "groupTitle": "Survey",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": [\n{\n}\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Survey",
    "name": "deleteSurvey",
    "type": "DELETE",
    "url": "/v1/survey",
    "title": "Delete survey",
    "description": "<p>Delete survey.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager|Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Survey/UI/API/Routes/DeleteSurvey.v1.private.php",
    "groupTitle": "Survey"
  },
  {
    "group": "Survey",
    "name": "findSurveyById",
    "type": "GET",
    "url": "/v1/survey",
    "title": "Find survey",
    "description": "<p>Find survey.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager|Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Survey/UI/API/Routes/FindSurveyById.v1.private.php",
    "groupTitle": "Survey",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": [\n{\n}\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Survey",
    "name": "findSurveyByIdExtended",
    "type": "GET",
    "url": "/v1/survey/datatable",
    "title": "Find survey with extended dataset",
    "description": "<p>Find survey with extended dataset.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager|Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Survey/UI/API/Routes/findSurveyByIdExtended.v1.private.php",
    "groupTitle": "Survey",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": [\n            {\n                \"object\": \"SurveyView\",\n                        \"id\": \"qnwmkv5704blag6r\",\n                        \"plot_id\": \"qnwmkv5704blag6r\",\n                        \"status_id\": null,\n                        \"date_start\": \"2017-11-14 00:00:00\",\n                        \"date_end\": \"2017-11-14 00:00:00\",\n                        \"notes\": \"Tanaman sengon tubuh dengan baik\",\n                        \"treecount\": 319,\n                        \"dbh_mean\": \"14.11\",\n                        \"height_mean\": \"12.90\",\n                        \"tree_volume\": \"479.39\",\n                        \"value_ird\": \"287634000.00\",\n                        \"value_usd\": \"19810.79\",\n                        \"trees_per_ha\": \"5315\",\n                        \"created_at\": {\n                \"date\": \"2018-12-19 14:17:44.000000\",\n                            \"timezone_type\": 3,\n                            \"timezone\": \"UTC\"\n                        },\n                        \"updated_at\": {\n                \"date\": \"2018-12-19 14:17:44.000000\",\n                            \"timezone_type\": 3,\n                            \"timezone\": \"UTC\"\n                        }\n            }\n        ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Survey",
    "name": "getAllSurveys",
    "type": "GET",
    "url": "/v1/surveys",
    "title": "Get all surveys",
    "description": "<p>Get all surveys.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "filename": "app/Containers/Survey/UI/API/Routes/GetAllSurveys.v1.private.php",
    "groupTitle": "Survey",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": [\n{\n}\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Survey",
    "name": "getAllSurveysCsv",
    "type": "GET",
    "url": "/v1/surveys/csv",
    "title": "Get all surveys as csv file",
    "description": "<p>Get all surveys as csv file. <strong>Extended filters can be applied.</strong></p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Survey/UI/API/Routes/GetAllSurveysCsv.v1.private.php",
    "groupTitle": "Survey"
  },
  {
    "group": "Survey",
    "name": "getOwnSurveys",
    "type": "GET",
    "url": "/v1/surveys/own",
    "title": "Get own surveys",
    "description": "<p>Get only own surveys.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Farmer"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "plot_id",
            "description": "<p>optional</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Survey/UI/API/Routes/GetOwnSurveys.v1.private.php",
    "groupTitle": "Survey",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": [\n{\n}\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Survey",
    "name": "getSurveyMap",
    "type": "GET",
    "url": "/v1/survey/map",
    "title": "Get survey map",
    "description": "<p>Get survey map.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required survey identifier</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"type\": \"FeatureCollection\",\n    \"features\": [\n        {\n            \"type\": \"Feature\",\n            \"geometry\": {\n                \"type\": \"Point\",\n                    \"coordinates\": [\n                    113.296497,\n                    -1.120923\n                ]\n            },\n            \"properties\": {\n                \"id\": \"llfpnu\"\n            },\n            \"id\": \"llfpnu\"\n        },\n        {\n            \"type\": \"Feature\",\n            \"geometry\": {\n                \"type\": \"Point\",\n                    \"coordinates\": [\n                    113.296645,\n                    -1.120987\n                ]\n            },\n            \"properties\": {\n                \"id\": \"tjxotk\"\n            },\n            \"id\": \"tjxotk\"\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Survey/UI/API/Routes/GetSurveyMap.v1.private.php",
    "groupTitle": "Survey"
  },
  {
    "group": "Survey",
    "name": "getSurveyView",
    "type": "GET",
    "url": "/v1/surveys/datatable",
    "title": "get surveys as filterable objects",
    "description": "<p>get surveys as filterable objects. <strong>Extended filters can be applied.</strong></p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "filename": "app/Containers/Survey/UI/API/Routes/getSurveyView.v1.private.php",
    "groupTitle": "Survey",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": [\n            {\n                \"object\": \"SurveyView\",\n                        \"id\": \"qnwmkv5704blag6r\",\n                        \"plot_id\": \"qnwmkv5704blag6r\",\n                        \"status_id\": null,\n                        \"date_start\": \"2017-11-14 00:00:00\",\n                        \"date_end\": \"2017-11-14 00:00:00\",\n                        \"notes\": \"Tanaman sengon tubuh dengan baik\",\n                        \"treecount\": 319,\n                        \"dbh_mean\": \"14.11\",\n                        \"height_mean\": \"12.90\",\n                        \"tree_volume\": \"479.39\",\n                        \"value_ird\": \"287634000.00\",\n                        \"value_usd\": \"19810.79\",\n                        \"trees_per_ha\": \"5315\",\n                        \"created_at\": {\n                \"date\": \"2018-12-19 14:17:44.000000\",\n                            \"timezone_type\": 3,\n                            \"timezone\": \"UTC\"\n                        },\n                        \"updated_at\": {\n                \"date\": \"2018-12-19 14:17:44.000000\",\n                            \"timezone_type\": 3,\n                            \"timezone\": \"UTC\"\n                        }\n            }\n        ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Survey",
    "name": "updateSurvey",
    "type": "PATCH",
    "url": "/v1/survey",
    "title": "Update survey",
    "description": "<p>Update survey.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager|Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "Date",
            "optional": false,
            "field": "date_start",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "Date",
            "optional": false,
            "field": "date_end",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "Date",
            "optional": false,
            "field": "date_import",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "plot_id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "notes",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "status_id",
            "description": "<p>survey_status</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "treecount",
            "description": "<p>only for legacy purpose</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Survey/UI/API/Routes/UpdateSurvey.v1.private.php",
    "groupTitle": "Survey",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"data\": [\n{\n}\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Tree",
    "name": "createTree",
    "type": "POST",
    "url": "/v1/tree",
    "title": "Create tree",
    "description": "<p>Create tree.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager|Owner of survey"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "survey_id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "species_id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "dbh_cm",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "height_m",
            "description": "<p>will be calculated, if not provided</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "health",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "comment",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "geodata",
            "description": "<p>point as geojson</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "amigo_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": true,
            "field": "accuracy",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "timestamp",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "File",
            "optional": false,
            "field": "image",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Tree/UI/API/Routes/CreateTree.v1.private.php",
    "groupTitle": "Tree",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Tree\",\n            \"id\": \"qnwmkv5704blag6r\",\n            \"identifier\": \"z50zje\",\n            \"survey_id\": \"qnwmkv5704blag6r\",\n            \"species\": \"Sengon\",\n            \"species_id\": \"qnwmkv5704blag6r\",\n            \"dbh_cm\": \"16.40\",\n            \"height_m\": \"14.75\",\n            \"health\": 1,\n            \"comment\": null,\n            \"timestamp\": {\n            \"date\": \"2017-11-20 00:00:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"amigo_id\": null,\n            \"image\": null,\n            \"point\": {\n            \"id\": 10,\n                \"point\": {\n                \"type\": \"Point\",\n                    \"coordinates\": [\n                    113.296497,\n                    -1.120923\n                ]\n                },\n                \"created_at\": \"2018-12-19 14:17:45\",\n                \"updated_at\": \"2018-12-19 14:17:45\",\n                \"deleted_at\": null\n            },\n            \"created_at\": {\n            \"date\": \"2018-12-19 14:17:45.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-12-19 14:17:45.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            }\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Tree",
    "name": "deleteTree",
    "type": "DELETE",
    "url": "/v1/tree",
    "title": "Delete tree",
    "description": "<p>Delete tree.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager|Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Tree/UI/API/Routes/DeleteTree.v1.private.php",
    "groupTitle": "Tree"
  },
  {
    "group": "Tree",
    "name": "findTreeById",
    "type": "GET",
    "url": "/v1/tree",
    "title": "Find tree",
    "description": "<p>Find tree.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager|Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Tree/UI/API/Routes/FindTreeById.v1.private.php",
    "groupTitle": "Tree",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Tree\",\n            \"id\": \"qnwmkv5704blag6r\",\n            \"identifier\": \"z50zje\",\n            \"survey_id\": \"qnwmkv5704blag6r\",\n            \"species\": \"Sengon\",\n            \"species_id\": \"qnwmkv5704blag6r\",\n            \"dbh_cm\": \"16.40\",\n            \"height_m\": \"14.75\",\n            \"health\": 1,\n            \"comment\": null,\n            \"timestamp\": {\n            \"date\": \"2017-11-20 00:00:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"amigo_id\": null,\n            \"image\": null,\n            \"point\": {\n            \"id\": 10,\n                \"point\": {\n                \"type\": \"Point\",\n                    \"coordinates\": [\n                    113.296497,\n                    -1.120923\n                ]\n                },\n                \"created_at\": \"2018-12-19 14:17:45\",\n                \"updated_at\": \"2018-12-19 14:17:45\",\n                \"deleted_at\": null\n            },\n            \"created_at\": {\n            \"date\": \"2018-12-19 14:17:45.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-12-19 14:17:45.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            }\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Tree",
    "name": "findTreeByIdExtended",
    "type": "GET",
    "url": "/v1/tree/datatable",
    "title": "Find tree with extended dataset",
    "description": "<p>Find tree with extended dataset.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager|Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Tree/UI/API/Routes/FindTreeByIdExtended.v1.private.php",
    "groupTitle": "Tree",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"TreeView\",\n            \"id\": \"qnwmkv5704blag6r\",\n            \"survey_id\": \"qnwmkv5704blag6r\",\n            \"species_id\": \"qnwmkv5704blag6r\",\n            \"dbh_cm\": \"16.40\",\n            \"height_m\": \"14.75\",\n            \"health\": 1,\n            \"comment\": null,\n            \"identifier\": \"z50zje\",\n            \"point_id\": \"lo9m8d5jd5e07yvx\",\n            \"timestamp\": \"2017-11-20 00:00:00\",\n            \"image_id\": null,\n            \"import_id\": 52779,\n            \"created_at\": {\n            \"date\": \"2018-12-19 14:17:45.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-12-19 14:17:45.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"image\": null,\n            \"species\": \"Sengon\",\n            \"volume\": \"1.93520000000000000\"\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Tree",
    "name": "getAllTrees",
    "type": "GET",
    "url": "/v1/trees",
    "title": "Get all trees",
    "description": "<p>Get all trees.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "filename": "app/Containers/Tree/UI/API/Routes/GetAllTrees.v1.private.php",
    "groupTitle": "Tree",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Tree\",\n            \"id\": \"qnwmkv5704blag6r\",\n            \"identifier\": \"z50zje\",\n            \"survey_id\": \"qnwmkv5704blag6r\",\n            \"species\": \"Sengon\",\n            \"species_id\": \"qnwmkv5704blag6r\",\n            \"dbh_cm\": \"16.40\",\n            \"height_m\": \"14.75\",\n            \"health\": 1,\n            \"comment\": null,\n            \"timestamp\": {\n            \"date\": \"2017-11-20 00:00:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"amigo_id\": null,\n            \"image\": null,\n            \"point\": {\n            \"id\": 10,\n                \"point\": {\n                \"type\": \"Point\",\n                    \"coordinates\": [\n                    113.296497,\n                    -1.120923\n                ]\n                },\n                \"created_at\": \"2018-12-19 14:17:45\",\n                \"updated_at\": \"2018-12-19 14:17:45\",\n                \"deleted_at\": null\n            },\n            \"created_at\": {\n            \"date\": \"2018-12-19 14:17:45.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-12-19 14:17:45.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            }\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Tree",
    "name": "getAllTreesCsv",
    "type": "GET",
    "url": "/v1/trees/csv",
    "title": "Get all trees as csv",
    "description": "<p>Get all trees as csv. <strong>Extended filters can be applied.</strong></p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Tree/UI/API/Routes/GetAllTreesCsv.v1.private.php",
    "groupTitle": "Tree"
  },
  {
    "group": "Tree",
    "name": "getOwnTrees",
    "type": "GET",
    "url": "/v1/trees/own",
    "title": "Get own trees",
    "description": "<p>Get only own trees.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Farmer"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "survey_id",
            "description": "<p>optional</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Tree/UI/API/Routes/GetOwnTrees.v1.private.php",
    "groupTitle": "Tree",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Tree\",\n            \"id\": \"qnwmkv5704blag6r\",\n            \"identifier\": \"z50zje\",\n            \"survey_id\": \"qnwmkv5704blag6r\",\n            \"species\": \"Sengon\",\n            \"species_id\": \"qnwmkv5704blag6r\",\n            \"dbh_cm\": \"16.40\",\n            \"height_m\": \"14.75\",\n            \"health\": 1,\n            \"comment\": null,\n            \"timestamp\": {\n            \"date\": \"2017-11-20 00:00:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"amigo_id\": null,\n            \"image\": null,\n            \"point\": {\n            \"id\": 10,\n                \"point\": {\n                \"type\": \"Point\",\n                    \"coordinates\": [\n                    113.296497,\n                    -1.120923\n                ]\n                },\n                \"created_at\": \"2018-12-19 14:17:45\",\n                \"updated_at\": \"2018-12-19 14:17:45\",\n                \"deleted_at\": null\n            },\n            \"created_at\": {\n            \"date\": \"2018-12-19 14:17:45.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-12-19 14:17:45.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            }\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Tree",
    "name": "getTreeView",
    "type": "GET",
    "url": "/v1/trees/datatable",
    "title": "Get trees as filterable objects",
    "description": "<p>Get trees as filterable objects. <strong>Extended filters can be applied.</strong></p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "filename": "app/Containers/Tree/UI/API/Routes/GetTreeView.v1.private.php",
    "groupTitle": "Tree",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"TreeView\",\n            \"id\": \"qnwmkv5704blag6r\",\n            \"survey_id\": \"qnwmkv5704blag6r\",\n            \"species_id\": \"qnwmkv5704blag6r\",\n            \"dbh_cm\": \"16.40\",\n            \"height_m\": \"14.75\",\n            \"health\": 1,\n            \"comment\": null,\n            \"identifier\": \"z50zje\",\n            \"point_id\": \"lo9m8d5jd5e07yvx\",\n            \"timestamp\": \"2017-11-20 00:00:00\",\n            \"image_id\": null,\n            \"import_id\": 52779,\n            \"created_at\": {\n            \"date\": \"2018-12-19 14:17:45.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-12-19 14:17:45.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"image\": null,\n            \"species\": \"Sengon\",\n            \"volume\": \"1.93520000000000000\"\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Trees",
    "name": "createMultipleTrees",
    "type": "POST",
    "url": "/v1/trees",
    "title": "Create multiple trees at once",
    "description": "<p>Create multiple trees at once.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager or Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "survey_id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "tree_data",
            "description": "<p>required array of trees</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "tree_data.species_id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "tree_data.dbh_cm",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "tree_data.height_m",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "tree_data.health",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "tree_data.comment",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "tree_data.geodata",
            "description": "<p>point as geojson</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "tree_data.amigo_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": true,
            "field": "tree_data.accuracy",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "tree_data.timestamp",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Tree/UI/API/Routes/CreateMultipleTrees.v1.private.php",
    "groupTitle": "Trees",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Tree\",\n            \"id\": \"qnwmkv5704blag6r\",\n            \"identifier\": \"z50zje\",\n            \"survey_id\": \"qnwmkv5704blag6r\",\n            \"species\": \"Sengon\",\n            \"species_id\": \"qnwmkv5704blag6r\",\n            \"dbh_cm\": \"16.40\",\n            \"height_m\": \"14.75\",\n            \"health\": 1,\n            \"comment\": null,\n            \"timestamp\": {\n            \"date\": \"2017-11-20 00:00:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"amigo_id\": null,\n            \"image\": null,\n            \"point\": {\n            \"id\": 10,\n                \"point\": {\n                \"type\": \"Point\",\n                    \"coordinates\": [\n                    113.296497,\n                    -1.120923\n                ]\n                },\n                \"created_at\": \"2018-12-19 14:17:45\",\n                \"updated_at\": \"2018-12-19 14:17:45\",\n                \"deleted_at\": null\n            },\n            \"created_at\": {\n            \"date\": \"2018-12-19 14:17:45.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-12-19 14:17:45.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            }\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Tree",
    "name": "updateTree",
    "type": "PATCH",
    "url": "/v1/tree",
    "title": "Update tree",
    "description": "<p>Update tree.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager|Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "survey_id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "species_id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "dbh_cm",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "height_m",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "health",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "comment",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "geodata",
            "description": "<p>point as geojson</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "amigo_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": true,
            "field": "accuracy",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "timestamp",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "File",
            "optional": false,
            "field": "image",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Tree/UI/API/Routes/UpdateTree.v1.private.php",
    "groupTitle": "Tree",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Tree\",\n            \"id\": \"qnwmkv5704blag6r\",\n            \"identifier\": \"z50zje\",\n            \"survey_id\": \"qnwmkv5704blag6r\",\n            \"species\": \"Sengon\",\n            \"species_id\": \"qnwmkv5704blag6r\",\n            \"dbh_cm\": \"16.40\",\n            \"height_m\": \"14.75\",\n            \"health\": 1,\n            \"comment\": null,\n            \"timestamp\": {\n            \"date\": \"2017-11-20 00:00:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"amigo_id\": null,\n            \"image\": null,\n            \"point\": {\n            \"id\": 10,\n                \"point\": {\n                \"type\": \"Point\",\n                    \"coordinates\": [\n                    113.296497,\n                    -1.120923\n                ]\n                },\n                \"created_at\": \"2018-12-19 14:17:45\",\n                \"updated_at\": \"2018-12-19 14:17:45\",\n                \"deleted_at\": null\n            },\n            \"created_at\": {\n            \"date\": \"2018-12-19 14:17:45.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2018-12-19 14:17:45.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            }\n        }\n    ]\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Tree",
    "name": "uploadTreeImage",
    "type": "POST",
    "url": "/v1/tree/image",
    "title": "Upload tree image",
    "description": "<p>Upload tree image.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager or Owner"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "image",
            "description": "<p>required image file</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n        \"object\": \"Media\",\n        \"id\": \"lv7xp94w95z8dg6j\",\n        \"title\": \"vhlznj\",\n        \"file\": \"yRxIf56JM7o1FfQnLFxzkO7IRPqGsVjS16rQvSrn.jpeg\",\n        \"ext\": \"jpeg\",\n        \"description\": null,\n        \"alt\": null,\n        \"filename\": \"DSC_6352.jpg\",\n        \"created_at\": \"2019-02-23T00:15:49+00:00\",\n        \"updated_at\": \"2019-02-23T00:15:49+00:00\"\n    },\n    \"meta\": {\n        \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Tree/UI/API/Routes/UploadTreeImage.v1.private.php",
    "groupTitle": "Tree"
  },
  {
    "group": "User",
    "name": "forgotPassword",
    "type": "POST",
    "url": "/v1/password/forgot",
    "title": "Forgot password",
    "description": "<p>Forgot password endpoint.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "reseturl",
            "description": "<p>the reset password url</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/ForgotPassword.v1.public.php",
    "groupTitle": "User"
  },
  {
    "group": "User",
    "name": "resetPassword",
    "type": "GET/POST",
    "url": "/v1/password/reset",
    "title": "Reset Password",
    "description": "<p>Resets a password for an user.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>from the forgot password email</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 204 OK\n{}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/ResetPassword.v1.public.php",
    "groupTitle": "User"
  },
  {
    "group": "Users",
    "name": "createAdmin",
    "type": "post",
    "url": "/v1/admins",
    "title": "Create Admin type Users",
    "description": "<p>Create non client users for the Dashboard.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/User/UI/API/Routes/CreateAdmin.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "deleteUser",
    "type": "delete",
    "url": "/v1/users/:id",
    "title": "Delete User",
    "description": "<p>Delete users of any type (Admin, Client...)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n    \"message\": \"User (4) Deleted Successfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/DeleteUser.v1.private.php",
    "groupTitle": "Users"
  },
  {
    "group": "Users",
    "name": "findUserById",
    "type": "get",
    "url": "/v1/users/:id",
    "title": "Find User",
    "description": "<p>Find a user by its ID</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/FindUserById.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "getAllAdmins",
    "type": "get",
    "url": "/v1/admins",
    "title": "Get All Admin Users",
    "description": "<p>Get All Users where role <code>Admin</code>. You can search for Users by email, name and ID. Example: <code>?search=Mahmoud</code> or <code>?search=whatever@mail.com</code>. You can specify the field as follow <code>?search=email:whatever@mail.com</code> or <code>?search=id:20</code>. You can search by multiple fields as follow: <code>?search=name:Mahmoud&amp;email:whatever@mail.com</code>.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated Admin"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetAllAdmins.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "getAllClients",
    "type": "get",
    "url": "/v1/clients",
    "title": "Get All Client Users",
    "description": "<p>Get All Users where role <code>Client</code>. You can search for Users by email, name and ID. Example: <code>?search=Mahmoud</code> or <code>?search=whatever@mail.com</code>. You can specify the field as follow <code>?search=email:whatever@mail.com</code> or <code>?search=id:20</code>. You can search by multiple fields as follow: <code>?search=name:Mahmoud&amp;email:whatever@mail.com</code>.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetAllClients.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "getAllUsers",
    "type": "get",
    "url": "/v1/users",
    "title": "Get All Users",
    "description": "<p>Get All Application Users (clients and admins). For all registered users &quot;Clients&quot; only you can use <code>/clients</code>. And for all &quot;Admins&quot; only you can use <code>/admins</code>.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetAllUsers.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "getAuthenticatedUser",
    "type": "GET",
    "url": "/v1/user/profile",
    "title": "Find Logged in User data (Profile Information)",
    "description": "<p>Find the user details of the logged in user from its Token. (without specifying his ID)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetAuthenticatedUser.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "registerUser",
    "type": "post",
    "url": "/v1/register",
    "title": "Register User (create client)",
    "description": "<p>Register users as (client).</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "gender",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "birth",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "Bool",
            "optional": false,
            "field": "admin",
            "description": "<p>(optional)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/User/UI/API/Routes/RegisterUser.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "updateUser",
    "type": "put",
    "url": "/v1/users/:id",
    "title": "Update User",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "Bool",
            "optional": false,
            "field": "admin",
            "description": "<p>(optional)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/User/UI/API/Routes/UpdateUser.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Village",
    "name": "createVillage",
    "type": "POST",
    "url": "/v1/village",
    "title": "Create village",
    "description": "<p>Create village.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "district_id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Village/UI/API/Routes/CreateVillage.v1.private.php",
    "groupTitle": "Village",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Village",
    "name": "deleteVillage",
    "type": "DELETE",
    "url": "/v1/village",
    "title": "Delete village",
    "description": "<p>Delete village.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Village/UI/API/Routes/DeleteVillage.v1.private.php",
    "groupTitle": "Village"
  },
  {
    "group": "Village",
    "name": "findVillageById",
    "type": "GET",
    "url": "/v1/village",
    "title": "Find village",
    "description": "<p>Find village.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Village/UI/API/Routes/FindVillageById.v1.private.php",
    "groupTitle": "Village",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Village",
    "name": "getAllVillages",
    "type": "GET",
    "url": "/v1/villages",
    "title": "Get all villages",
    "description": "<p>Get all villages.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager, Farmer"
      }
    ],
    "filename": "app/Containers/Village/UI/API/Routes/GetAllVillages.v1.private.php",
    "groupTitle": "Village",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Village",
    "name": "updateVillage",
    "type": "PATCH",
    "url": "/v1/village",
    "title": "Update village",
    "description": "<p>Update village.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Manager"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>required</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "district_id",
            "description": "<p>required</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Village/UI/API/Routes/UpdateVillage.v1.private.php",
    "groupTitle": "Village",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n}",
          "type": "json"
        }
      ]
    }
  }
] });
