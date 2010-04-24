Nutrition tools
==

These tools are all written in PHP with [konstrukt](http://github.com/troelskn/konstrukt). The initial classes are created using [krudt](http://github.com/troelskn/krudt)

I am collecting a couple of tools to use when teaching nutrition.

MET
--

All MET values has been imported from Dietist XP and are located in the data directory (MET.csv). Import the data:

    script/generate/model met name:string value:string category:string
    script/import_met_data

Food values
--

All food values has been found at [Fødevaredatabanken v7.01.0](http://www.foodcomp.dk/v7/fvdb_download.asp). They have been extracted from the MDB-database and converted to .csv-files. After following instructions in krudt how to create an app, you can run these scripts to add the models.

    script/generate/model source SourceRefId:string SourceID:string RefId:string
    script/generate/model classif MainGrp:integer SubGrp:integer EngFdGp:string OrigFdGp:string
    script/generate/model compname CompId:string SrtOrd:string Unit:string CmpNamDK:string CmpNamEN:string PublStatus:string eurofoodsTag:string
    script/generate/model foodinfo FoodId:string DanName:string ProdName:string EngName:string SysName:string MainGrp:string SubGrp:string Waste:string NCF:string FACF:string PEF:string FEF:string CEF:string Density:string Remarks:string PublStatus:string LanguaL:string GRIN:string FISHBASE:string BASIS:string USDA:string FIFood:string UKFood:string FRFood:string DEFood:string SEFood:string NOFood:string NLFood:string ISFood:string SPFood:string ITFood:string DateUpdated:string UpdatedBy:string Recipe:string WaterYield:string FatYield:string 
    script/generate/model groupname MainGrp:string NameDK:string NameEn:string
    script/generate/model nutrient FoodId:string CompId:string BestLoc:string Median:string Minimum:string Maximum:string NoAnal:string SourceId:string
    script/generate/model nutrient RefId:string PubTypeId:string AcqTypeId:string Title:string Authors:string Publishr:string PubDate:string Version:string OrigLang:string Languages:string ISBN:string FstEdDat:string EdNo:string NoPages:string BkTitle:string Editors:string Pages:string LgJrName:string AbJrName:string ISSN:string Volume:string Issue:string SeriName:string SeriNo:string RprtTitle:string FileFrmt:string WWW:string Medium:string OS:string Media:string Valid:string Remarks:string FoodId:string DateUpdated:string UpdatedBy:string DocLink:string
    
Todo
--

* Now the food data has to be imported and the database schema improved. All the csv-files are present in the data directory. 

    
References
--

Saxholt, E., Christensen, A.T., Møller, A., Hartkopp, H.B., Hess Ygil, K., Hels, O.H.:
Fødevaredatabanken, version 7.
Afdeling for Ernæring, Fødevareinstituttet, Danmarks Tekniske Universitet. December 2008.
Fødevaredatabankens netsted: http://www.foodcomp.dk/